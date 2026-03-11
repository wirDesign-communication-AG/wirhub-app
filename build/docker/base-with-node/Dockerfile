FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

RUN wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.4/install.sh | bash \
 && export NVM_DIR="$HOME/.nvm" \
 && [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh" \
 && [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion" \
 && nvm install 24 \
 && n=$(which node);n=${n%/bin/node}; chmod -R 755 $n/bin/*; sudo cp -r $n/{bin,lib,share} /usr/local \
 && mkdir /var/www/.npm && chown -R www-data:www-data /var/www/.npm \
 && mkdir /var/www/.cache && chown -R www-data:www-data /var/www/.cache \
 && echo 0 | tee /proc/sys/kernel/apparmor_restrict_unprivileged_userns


ENTRYPOINT []
CMD ["/bin/bash"]
