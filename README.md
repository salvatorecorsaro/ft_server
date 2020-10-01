# ft_server

![ft_server_cover](https://ibb.co/XJsBvVt)

42 project, that involved the creation of a docker image. Approved with 100/100.

to use it clone it then mount the image with:
´´´
docker build -t ft_server .
´´´
and run it with: 
´´´
docker run -it --rm -p 80:80 -p 443:443 --name ft_server ft_server bash
´´´