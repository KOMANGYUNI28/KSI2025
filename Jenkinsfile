pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }

        stage('Unit Test') {
            when {
                expression { return false } // skip kalau tidak ada test
            }
            steps {
                echo 'Skipping tests...'
            }
        }
    }

    post {
        failure {
            echo 'Pipeline gagal!'
        }
    }
}
