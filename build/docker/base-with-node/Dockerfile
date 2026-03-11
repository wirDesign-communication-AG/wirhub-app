FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

RUN wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.4/install.sh | bash \
 && export NVM_DIR="$HOME/.nvm" \
 && [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh" \
 && [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion" \
 && nvm install 24 \
 && n=$(which node);n=${n%/bin/node}; ls -ahl $n; chmod -R 755 $n/bin/*; cp -r $n/bin /usr/local; cp -r $n/lib /usr/local; cp -r $n/share /usr/local \
 && mkdir /var/www/.npm && chown -R www-data:www-data /var/www/.npm \
 && mkdir /var/www/.cache && chown -R www-data:www-data /var/www/.cache

ENTRYPOINT []
CMD ["/bin/bash"]
