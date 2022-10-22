#!/bin/sh

version=`cat composer.json | sed -n '/version/p'`
version=`echo $version | sed 's/"version": "//g'`
version=`echo $version | sed 's/\",//g'`
echo $version
