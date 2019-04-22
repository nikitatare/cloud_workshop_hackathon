#Pull the sql database image from https://cloud.docker.com/repository/docker/scarletk99/food_store_repo.
#This is the database linked with test.php
#Build and run test.php using the Dockerfile attached using the following commands

#To build the image save the Dockerfile and test.php file in one directory and go to that directory and run the command:
sudo docker build -t website:v1 .

#To run the image run the following command:
sudo docker run -it -d -p 80:80 --name=demofoodstore website:v1

#Go to localhost:80
