#!/bin/bash
git pull
cd ..
php bin/console cache:clear -e prod