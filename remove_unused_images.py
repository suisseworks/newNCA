import os
import re
import shutil

# Path to the root directory of your website (where this script is located)
root_dir = os.getcwd()

# Extensions of files to scan for image references
file_extensions = ['.html', '.css', '.js', '.php']

# Get all images in the 'img' folder
img_dir = os.path.join(root_dir, 'img')
all_images = set(os.listdir(img_dir))

# Set to store referenced images
used_images = set()

# Traverse files and search for image references
for subdir, dirs, files in os.walk(root_dir):
    for file in files:
        ext = os.path.splitext(file)[1]
        if ext in file_extensions:
            file_path = os.path.join(subdir, file)
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
                # Search for image references in the 'img' folder
                matches = re.findall(r'img\/([^\s\'\"<>]+)', content)
                used_images.update(matches)

# Images not used
unused_images = all_images - used_images

print("Unused images:")
for img in unused_images:
    print(img)
    # Remove the unused image file
    img_path = os.path.join(img_dir, img)
    if os.path.isfile(img_path):
        os.remove(img_path)
        print(f"Deleted {img}")
    else:
        print(f"{img} does not exist in the img folder.")
