api = 2
core = 7.x

projects[ns_core][type] = module
projects[ns_core][version] = 2.x-dev
projects[ns_core][download][type] = git
projects[ns_core][download][branch] = 7.x-2.x

; Latest NodeStream enterprise.
projects[ns_prod_enterprise][type] = module
projects[ns_prod_enterprise][version] = 2.x-dev
projects[ns_prod_enterprise][download][type] = git
projects[ns_prod_enterprise][download][branch] = master

projects[defaultcontent][type] = module
projects[defaultcontent][version] = 1.x-dev
projects[defaultcontent][download][type] = git
projects[defaultcontent][download][revision] = d8806d8