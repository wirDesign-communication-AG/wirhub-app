# v3.2.0 2026-02-16 12:53:00
FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

# Enlighten image
RUN apt purge -y apache2 libapache2-mod-php vim cron \
 && apt autoremove -y

# Prepare setup
RUN wget -qO- https://dl.google.com/linux/linux_signing_key.pub \
    | gpg --dearmor -o /usr/share/keyrings/google-linux-keyring.gpg \
 && echo "deb [arch=amd64 signed-by=/usr/share/keyrings/google-linux-keyring.gpg] \
    http://dl.google.com/linux/chrome/deb/ stable main" \
    > /etc/apt/sources.list.d/google-chrome.list

# Setup node and chrome
RUN curl -fsSL https://deb.nodesource.com/setup_24.x | bash - \
 && apt-get install -y --no-install-recommends nodejs google-chrome-stable \
 && rm -rf /var/lib/apt/lists/*

# Setup chromedriver
RUN CHROME_VERSION=$(google-chrome --version | awk '{print $3}' | cut -d. -f1) \
 && DRIVER_VERSION=$(curl -s https://chromedriver.storage.googleapis.com/LATEST_RELEASE_$CHROME_VERSION) \
 && curl -fsSL https://chromedriver.storage.googleapis.com/$DRIVER_VERSION/chromedriver_linux64.zip -o /tmp/chromedriver.zip \
 && unzip /tmp/chromedriver.zip -d /usr/local/bin \
 && rm /tmp/chromedriver.zip \
 && chmod +x /usr/local/bin/chromedriver
