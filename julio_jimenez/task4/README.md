# Running pod
## Create configMap from file default.conf in derectory
    kubectl create configmap nginx-config --from-file=default.conf
## Apply configuration
    kubectl apply -f pocketPod.yaml
## Exposing pod
    kubectl expose pocket-test-pod --type=<type>



### Note
#### This is a wordpress using this configuration running on GKE
#### <a href=http://34.68.40.9>34.68.40.9</a>

