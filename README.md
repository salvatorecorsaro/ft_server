# ft_server

![ft_server_cover](https://i.ibb.co/6sPhfNF/ft-server.jpg)

42 project, that involved the creation of a docker image. Approved with 100/100.

to use it clone it then mount the image with:
```bash
docker build -t ft_server .
```
and run it with: 
```bash
docker run -it --rm -p 80:80 -p 443:443 --name ft_server ft_server bash
```