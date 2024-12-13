# Aqui estou importando o Nginx Alpine para carregar um site leve
FROM nginx:alpine

# Copiar o conteúdo da pasta 'site' para o diretório padrão do NGINX
COPY . /usr/share/nginx/html

# Abro o contêiner na porta 80
EXPOSE 80

# Este comando manda o nginx rodar em primeiro plano
CMD ["nginx", "-g", "daemon off;"]