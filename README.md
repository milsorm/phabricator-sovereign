# phabricator-sovereign

Phabricator application for controlling the BuildBot farm.

(c) 2015 Copyright Milan Sorm (sorm@is4u.cz)

## Synopsis

Application is created as a new libph library which can be used as an extension for Phabricator (www.phabricator.org).
All codes are already liberated through Arcanist so everything necessary for instant usage with Phabricator.

## Installation

Put all codes next to Phabricator main directory (where arcanist, libphutil and phabricator itself are stored)
and add following configuration to Phabricator:

	./phabricator/bin/config set load-libraries '{ "phabricator-sovereign": "..\/phabricator-sovereign\/src" }'

## Application

In src/ folder you can find prepared applications:

**Sovereign** which allows to control BuildBot farm.

## Acknowledgements

Thanks to the whole Phabricator team for such a great tool for organizing development.
