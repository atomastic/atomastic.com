#
# Flextype Traditional CMS (MacOS, Linux)
#
# Required: curl, wget, jq
#
# Will be installed
#
# Core: Flextype
# Plugins: admin, accounts-admin, acl, site, twig, form, form-admin, themes-admin, jquery, icon, phpmailer
# Themes: noir

curl https://github.com/flextype/flextype/releases/download/v0.9.16/flextype-0.9.16.zip -L -O;
unzip flextype-0.9.16.zip;
rm flextype-0.9.16.zip;

mkdir project;

mkdir project/plugins;

mkdir project/plugins/site;
cd project/plugins/site;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/site/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/admin;
cd project/plugins/admin;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/admin/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/twig;
cd project/plugins/twig;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/twig/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/themes-admin;
cd project/plugins/themes-admin;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/themes-admin/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/form;
cd project/plugins/form;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/form/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/form-admin;
cd project/plugins/form-admin;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/form-admin/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/jquery;
cd project/plugins/jquery;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/jquery/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/icon;
cd project/plugins/icon;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/icon/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/acl;
cd project/plugins/acl;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/acl/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/accounts-admin;
cd project/plugins/accounts-admin;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/accounts-admin/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/plugins/phpmailer;
cd project/plugins/phpmailer;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-plugins/phpmailer/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/themes;

mkdir project/themes/noir;
cd project/themes/noir;
wget -c $(curl -ksL "https://api.github.com/repos/flextype-themes/noir/releases/latest" | jq -r ".assets[0].browser_download_url")
unzip *.zip;
rm *.zip;
rm -rf __MACOSX;
cd ../../../;

mkdir project/fieldsets;
cp -r -v  project/plugins/accounts-admin/fieldsets/* project/fieldsets/
cp -r -v  project/plugins/form/fieldsets/samples/default/default.yaml project/fieldsets/
cp -r -v  project/plugins/form/fieldsets/samples/page/page.yaml project/fieldsets/

mkdir project/entries;
mkdir project/entries/home;
touch project/entries/home/entry.md
echo -e '---\ntitle: Home\nfieldset: page\ntemplate: default\nmenu_item_title: Home\nmenu_item_url: home\nmenu_item_target: _self\nmenu_item_order: 1\n---\n<h1 style="text-align: center;">Welcome!</h1><p style="text-align: center;" class="lead">Welcome to your new Flextype powered website.<br>Flextype is succesfully installed, you can start editing the content and customising your site in <a href="./admin">Admin panel</a>.</p>' > project/entries/home/entry.md

find . -name '.DS_Store' -type f -delete ;
rm -rf __MACOSX;
zip -r flextype-cms-0.9.16.zip . ;
