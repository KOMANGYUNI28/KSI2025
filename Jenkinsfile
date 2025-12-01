pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/komangyuni28/KSI2025.git'
            }
        }

        stage('Install PHPUnit') {
            steps {
                bat 'composer install'
            }
        }

        stage('Run Test') {
            steps {
                bat 'vendor\\bin\\phpunit tests'
            }
        }
    }
}
