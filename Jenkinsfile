pipeline {
    agent any

    environment {
        SERVER_IP   = "45.236.128.226"
        APP_DIR     = "/var/www/"
        BRANCH      = "master"
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: "${env.BRANCH}", url: 'https://github.com/JavierAgueroCL/laravel-dte-api.git'
            }
        }

        stage('Deploy to Server') {
            steps {
                withCredentials([usernamePassword(credentialsId: 'server-pass', usernameVariable: 'USER', passwordVariable: 'PASS')]) {
                    sh """
                        sshpass -p $PASS ssh -p 22222 -o StrictHostKeyChecking=no $USER@${SERVER_IP} '
                            set -e
                            cd ${APP_DIR} || exit

                            echo "Actualizando código..."
                            git fetch origin
                            git reset --hard origin/${BRANCH}

                            echo "Instalando dependencias con Composer..."
                            composer install --no-interaction --prefer-dist --optimize-autoloader

                            echo "Ejecutando migraciones..."
                            

                            echo "Optimizando caches..."
                            php artisan config:clear
                            php artisan config:cache
                            php artisan route:cache
                            php artisan view:cache

                            echo "Reiniciando workers..."
                            php artisan queue:restart || true

                            echo "Deploy completado en ${SERVER_IP}"
                        '
                    """
                }
            }
        }
    }

    post {
        success {
            echo "Deploy exitoso"
        }
        failure {
            echo "Fallo el deploy"
        }
    }
}
