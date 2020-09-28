# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    start.sh                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: scorsaro <scorsaro@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/28 12:17:50 by scorsaro          #+#    #+#              #
#    Updated: 2020/09/28 12:18:00 by scorsaro         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/bin/bash

service mysql start
service php7.3-fpm start
service nginx start

/bin/bash
