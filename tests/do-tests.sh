#!/bin/bash
PATH=$PATH:$PWD/../bin bash -c '$GOPATH/bin/graphqlc --php-echo_out=. $PWD/data/*.graphql'
