#!/bin/bash

# Check if yq is installed
if ! command -v yq &> /dev/null; then
    echo "yq is not installed. Attempting to install yq..."
    # Check if the script has sudo rights
    if ! sudo -n true &> /dev/null; then
        echo "This script requires sudo rights to install yq."
        exit 1
    fi
    # Install yq using curl and pip
    curl -sSL https://github.com/mikefarah/yq/releases/latest/download/yq_linux_amd64 -o /usr/local/bin/yq
    sudo chmod +x /usr/local/bin/yq
fi

if [[ $# -ne 2 ]]; then
  echo "Usage: $0 <file1> <file2>"
  exit 1
fi

file1=$1
file2=$2

# Check if both files exist
if [[ ! -f $file1 ]]; then
  echo "$file1 does not exist"
  exit 1
fi

if [[ ! -f $file2 ]]; then
  echo "$file2 does not exist"
  exit 1
fi

# Read YAML keys from file1
readarray -t keys1 < <(yq eval 'keys | .[]' $file1)

# Read YAML keys from file2
readarray -t keys2 < <(yq eval 'keys | .[]' $file2)

# Find keys that are missing in each file
missing1=()
missing2=()

# Loop through keys1
for element in "${keys1[@]}"
do
    # Check if element is present in keys2
    if [[ ! " ${keys2[@]} " =~ " ${element} " ]]; then
        # Append element to new_arr
        missing2+=($element)
    fi
done

# Loop through keys2
for element in "${keys2[@]}"
do
    # Check if element is not present in keys1
    if [[ ! " ${keys1[@]} " =~ " ${element} " ]]; then
        # Append element to new_arr
        missing1+=($element)
    fi
done

# Output the missing keys
echo -e "\e[1;33mKeys missing in $file1:\e[0m"
echo "---------------------------------------"
printf '%s\n' "${missing1[@]}"

echo
echo
echo

echo -e "\e[1;33mKeys missing in $file2:\e[0m"
echo "---------------------------------------"
printf '%s\n' "${missing2[@]}"