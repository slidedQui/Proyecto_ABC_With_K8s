# Pasos de ejecucion
minikube docker-env
& minikube -p minikube docker-env --shell powershell |Invoke-Expression
Docker build . -t db
Docker build . -t php
kubectl apply -f page.yml


/HTML/ProyectoABC.html