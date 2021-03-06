# -*- python -*- 

import os

VERSION = '1.0.0'
APPNAME = 'oswordpress-theme'

top = '.'
out = 'build'

def configure(conf):
    conf.check_tool('gnu_dirs')

    conf.define('VERSION', VERSION)
    
    conf.define('prefix', conf.env["PREFIX"])
    conf.define('PACKAGE', APPNAME)

def options(opt):
    opt.tool_options("gnu_dirs")

def build(bld):
    src_dir = bld.path.find_dir('.')
    img_dir = bld.path.find_dir('images')

    bld.install_files('${DATADIR}/wordpress/wp-content/themes/openshine', 
                      src_dir.ant_glob('*.php') + \
                      src_dir.ant_glob('*.css') + \
                      src_dir.ant_glob('*.ico'), 
                      cwd=src_dir, relative_trick=True,
                      chmod=644)

    bld.install_files('${DATADIR}/wordpress/wp-content/themes/openshine/images', 
                      img_dir.ant_glob('**/*'), 
                      cwd=img_dir, relative_trick=True,
                      chmod=644)
def dist(ctx):
    ctx.excl = ' **/build/* **/.waf-1* **/*~  **/*.swp **/.lock-w* **/debian/* **/.git/* **/.gitignore' 
