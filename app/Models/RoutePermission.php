<?php

namespace App\Models;

class RoutePermission
{
    private static $routesPermissions = [

        'api.empresas.show' => 'ver empresas',
        'api.empresas.index' => 'ver empresas',
        'api.empresas.store' => 'crear empresas',
        'api.empresas.update' => 'editar empresas',
        'api.empresas.destroy' => 'borrar empresas',
        'api.empresas.roles.show' => 'ver roles',
        'api.empresas.roles.index' => 'ver roles',
        'api.empresas.roles.store' => 'crear roles',
        'api.empresas.roles.update' => 'editar roles',
        'api.empresas.roles.destroy' => 'borrar roles',
        'api.empresas.cafs.show' => 'ver folios',
        'api.empresas.cafs.index' => 'ver folios',
        'api.empresas.cafs.store' => 'subir folios',
        'api.empresas.cafs.update' => 'editar folios',
        'api.empresas.cafs.destroy' => 'borrar folios',
        'api.empresas.users.show' => 'ver usuarios',
        'api.empresas.users.index' => 'ver usuarios',
        'api.empresas.users.store' => 'crear usuarios',
        'api.empresas.users.update' => 'editar usuarios',
        'api.empresas.users.destroy' => 'borrar usuarios',
        'api.empresas.branch_offices.show' => 'ver sucursales',
        'api.empresas.branch_offices.index' => 'ver sucursales',
        'api.empresas.branch_offices.store' => 'crear sucursales',
        'api.empresas.branch_offices.update' => 'editar sucursales',
        'api.empresas.branch_offices.destroy' => 'borrar sucursales',
        'api.empresas.certificados.show' => 'ver certificados digitales',
        'api.empresas.certificados.index' => 'ver certificados digitales',
        'api.empresas.certificados.store' => 'subir certificados digitales',
        'api.empresas.certificados.update' => 'editar certificados digitales',
        'api.empresas.certificados.destroy' => 'borrar certificados digitales',
        'api.documentos.show' => 'ver documentos',
        'api.documentos.index' => 'ver documentos',
        'api.documentos.store' => 'crear documentos',
        'api.documentos.update' => 'editar documentos',
        'api.documentos.destroy' => 'borrar documentos',
        'api.documentos.pdf' => 'ver pdf documentos',
        'api.documentos.sendPDF' => 'enviar pdf dte',
        'api.tickets.show' => 'ver boletas',
        'api.tickets.index' => 'ver boletas',
        'api.tickets.store' => 'crear boletas',
        'api.tickets.pdf' => 'ver pdf boletas',
        'api.tickets.sendPDF' => 'enviar pdf dte',
        'api.pais.show' => 'ver localidades',
        'api.pais.index' => 'ver localidades',
        'api.pais.store' => 'crear localidades',
        'api.pais.update' => 'editar localidades',
        'api.pais.destroy' => 'borrar localidades',
        'api.regiones.show' => 'ver localidades',
        'api.regiones.index' => 'ver localidades',
        'api.regiones.store' => 'crear localidades',
        'api.regiones.update' => 'editar localidades',
        'api.regiones.destroy' => 'borrar localidades',
        'api.provincias.show' => 'ver localidades',
        'api.provincias.index' => 'ver localidades',
        'api.provincias.store' => 'crear localidades',
        'api.provincias.update' => 'editar localidades',
        'api.provincias.destroy' => 'borrar localidades',
        'api.comunas.show' => 'ver localidades',
        'api.comunas.index' => 'ver localidades',
        'api.comunas.store' => 'crear localidades',
        'api.comunas.update' => 'editar localidades',
        'api.comunas.destroy' => 'borrar localidades',
        'api.emails.show' => 'ver emails',
        'api.emails.index' => 'ver emails',
        'api.emails.store' => 'crear emails',
        'api.emails.update' => 'editar emails',
        'api.emails.destroy' => 'borrar emails',
        'api.employees.show' => 'ver empleados',
        'api.employees.index' => 'ver empleados',
        'api.employees.store' => 'crear empleados',
        'api.employees.update' => 'editar empleados',
        'api.employees.destroy' => 'borrar empleados',
        'api.entidades.show' => 'ver entidades',
        'api.entidades.index' => 'ver entidades',
        'api.entidades.store' => 'crear entidades',
        'api.entidades.update' => 'editar entidades',
        'api.entidades.destroy' => 'borrar entidades',
        'api.ticket_credit_notes.show' => 'ver notas de credito de boletas',
        'api.ticket_credit_notes.index' => 'ver notas de credito de boletas',
        'api.ticket_credit_notes.store' => 'crear notas de credito de boletas',
        'api.ticket_credit_notes.update' => 'editar notas de credito de boletas',
        'api.ticket_credit_notes.destroy' => 'borrar notas de credito de boletas',
        'api.sii.obtener_dtes_recibidos' => 'obtener listado dtes recibidos en SII',
        'api.sii.consultar_folios_autorizados_timbraje' => 'consultar folios autorizados',
        'api.sii.solicitar_timbraje' => 'solicitar timbraje',
        'api.sii.obtener_rcv' => 'obtener rcv',
        'api.acceptance_claims.show' => 'ver aceptacion/reclamos',
        'api.acceptance_claims.index' => 'ver aceptacion/reclamos',
        'api.acceptance_claims.store' => 'crear aceptacion/reclamos',
        'api.acceptance_claims.update' => 'editar aceptacion/reclamos',
        'api.acceptance_claims.destroy' => 'borrar aceptacion/reclamos',
        'api.archivos.descargar' => 'descargar archivos',
        'api.empresas.subirLogo' => 'subir logo empresa',
        'api.documentos.xml' => 'descargar archivos',
        'api.documentos.xml_envio' => 'descargar archivos',
    ];

    public static function getPermission($route)
    {
        if (! $route) {
            return false;
        }

        return isset(self::$routesPermissions[$route]) ? self::$routesPermissions[$route] : false;
    }
}
