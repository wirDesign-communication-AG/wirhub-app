FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

RUN apt -q update \
 && apt -q -y --no-install-recommends install ca-certificates  \
    fonts-liberation  \
    libasound2t64  \
    libatk-bridge2.0-0  \
    libatk1.0-0  \
    libc6  \
    libcairo2  \
    libcups2  \
    libdbus-1-3  \
    libexpat1  \
    libfontconfig1  \
    libgbm1  \
    libgcc1  \
    libglib2.0-0  \
    libgtk-3-0  \
    libnspr4  \
    libnss3  \
    libpango-1.0-0  \
    libpangocairo-1.0-0  \
    libstdc++6  \
    libx11-6  \
    libx11-xcb1  \
    libxcb1  \
    libxcomposite1  \
    libxcursor1  \
    libxdamage1  \
    libxext6  \
    libxfixes3  \
    libxi6  \
    libxrandr2  \
    libxrender1  \
    libxss1  \
    libxtst6  \
    xdg-utils \
    lsb-release \
 && wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.4/install.sh | bash \
 && nvm install 24 \
 && n=$(which node);n=${n%/bin/node}; chmod -R 755 $n/bin/*; sudo cp -r $n/{bin,lib,share} /usr/local \
 && mkdir /var/www/.npm && chown -R www-data:www-data /var/www/.npm \
 && mkdir /var/www/.cache && chown -R www-data:www-data /var/www/.cache \
 && echo 0 | sudo tee /proc/sys/kernel/apparmor_restrict_unprivileged_userns


ENTRYPOINT []
CMD ["/bin/bash"]
