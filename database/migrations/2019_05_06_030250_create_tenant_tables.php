<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $foreignKeys = config('permission.foreign_keys');

        // Comment out this if you already have a tenant table & the drop $tableNames['tenants'] in the down function
        //$this->createTenantTable($tableNames, $foreignKeys);

        Schema::create($tableNames['role_tenant_user'], function (Blueprint $table) use ($tableNames, $foreignKeys) {
            $type = $foreignKeys['tenants']['key_type'];
            $length = $foreignKeys['tenants']['str_length'];

            $table->unsignedInteger('role_id');
            if ($type != 'int') {
                $table = $this->determineColumnType($table, 'tenant_id', $type, $length);
            } else {
                $table->unsignedBigInteger('tenant_id');
            }

            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('role_id', 'pivot_role')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->foreign('tenant_id', 'pivot_tenant')
                ->references($foreignKeys['tenants']['id'])
                ->on($tableNames['tenants'])
                ->onDelete('cascade');

            $table->foreign('user_id', 'pivot_user')
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->primary(['role_id', 'tenant_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        //Schema::drop($tableNames[$tableNames['tenants']]);  //Drop this table only if you don't mind losing your tenant table
        Schema::drop($tableNames['role_tenant_user']);
    }

    private function createTenantTable($tableNames, $foreignKeys)
    {
        Schema::create($tableNames['tenants'], function (Blueprint $table) use ($foreignKeys) {
            $type = $foreignKeys['tenants']['key_type'];
            $name = $foreignKeys['tenants']['id'];
            $length = $foreignKeys['tenants']['str_length'];
            $table = $this->determineColumnType($table, $name, $type, $length);
            if ($type != 'int') {
                //$table->primary($foreignKeys['tenants']['id']);
            }
            $table->string('tenant_name');
            $table->timestamps();
        });
    }

    private function determineColumnType(&$table, $name, $type, $length)
    {
        if ($type == 'int') {
            $table->increments($name);
        } else {
            if (empty($length)) {
                $table->string($name);
            } else {
                $table->char($name, $length);
            }
        }

        return $table;
    }
}
