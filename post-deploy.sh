
#! /bin/bash

while getopts "p:" opt; do
	case ${opt} in
		p )
			PROJECT_DIR=${OPTARG}
			;;
	esac
done

# Establish symbolic links to the `media` and `enquiries` directories
rm media
mkdir -p ../media/${PROJECT_DIR}
ln -s ../media/${PROJECT_DIR} media
rm enquiries
mkdir -p ../enquiries/${PROJECT_DIR}/{customer,salesperson}
chmod -R 757 ../enquiries/${PROJECT_DIR}
ln -s ../enquiries/${PROJECT_DIR} enquiries
