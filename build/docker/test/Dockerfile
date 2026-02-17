# v3.2.0 2026-02-17 12:30:00
FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

# Packages
RUN curl -fsSL https://deb.nodesource.com/setup_24.x | bash - \
 && apt purge -y apache2 libapache2-mod-php vim cron \
 && apt autoremove -y \
 && apt update \
 && apt install -y --no-install-recommends nodejs jq php8.4-sqlite3 \
 && rm -rf /var/lib/apt/lists/*

# Chrome
RUN mkdir -p /opt/chrome \
 && wget -qO- https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json \
    | jq -r '.channels.Stable.downloads.chrome[] | select(.platform=="linux64").url' \
    | xargs wget -qO /tmp/chrome.zip \
 && unzip /tmp/chrome.zip -d /opt/chrome \
 && ln -s /opt/chrome/chrome-linux64/chrome /usr/local/bin/google-chrome \
 && rm /tmp/chrome.zip

# Setup chromedriver
RUN wget -qO- https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json \
    | jq -r '.channels.Stable.downloads.chromedriver[] | select(.platform=="linux64").url' \
    | xargs wget -qO /tmp/chromedriver.zip \
 && unzip /tmp/chromedriver.zip -d /opt \
 && ln -s /opt/chromedriver-linux64/chromedriver /usr/local/bin/chromedriver \
 && rm /tmp/chromedriver.zip

ENTRYPOINT []
CMD ["/bin/bash"]
