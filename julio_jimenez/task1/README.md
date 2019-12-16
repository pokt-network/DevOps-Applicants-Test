# Running container
## Build your image
#### Command must be run in the same directory as the Dockerfile. 
    docker build -t <imagename>:<imagetag> .
## Run container
    docker run -p <port>:80 <imagename>:<imagetag> 

