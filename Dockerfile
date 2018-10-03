FROM bitnami/minideb:latest
RUN apt install git nginx -y
# INSTALL WHAT WE Need
COPY / .
#
#
#EXPOSING SOME PORTS
EXPOSE 80 443
#
#
# ENTRYPOINT
