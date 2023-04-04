module.exports = function (grunt) {

    const sass = require('sass');
    const dotenv = require('dotenv');

    const dotEnvConfig = dotenv.config({path: '../.env'}).parsed;

    grunt.initConfig(
        {
            pkg: grunt.file.readJSON('package.json'),
            googlefonts: {
                build: {
                    options: {
                        fontPath: '../web/asset/grunt/fonts/',
                        cssFile: '../web/asset/grunt/css/fonts.css',
                        httpPath: '../fonts/',
                        fonts: [
                            {
                                family: 'Open Sans',
                                styles: [
                                    400, 700
                                ]
                            },
                        ]
                    }
                }
            },
            sass: {
                options: {
                    implementation: sass,
                    includePaths: ['./node_modules'],
                    outputStyle: 'compressed',
                    sourceMap: false
                },
                app: {
                    files: {
                        '../web/asset/grunt/css/error.css': [
                            '../assets/scss/error.scss'
                        ],
                        '../web/asset/grunt/css/panther.css': [
                            '../assets/scss/panther.scss'
                        ]
                    }
                },
                print: {
                    files: {
                        '../web/asset/grunt/css/print.min.css': [
                            '../assets/scss/print.scss'
                        ],
                    }
                }
            },
            cssmin: {
                options: {
                    level: {
                        1: {
                            specialComments: 0
                        }
                    },
                    mergeIntoShorthands: false,
                    roundingPrecision: -1,
                    sourceMap: false
                },
                app: {
                    files: [
                        {
                            '../web/asset/grunt/css/error.min.css': [
                                '../web/asset/grunt/css/fonts.css',
                                '../web/asset/grunt/css/error.css'
                            ]
                        }
                    ]
                }
            },
            terser: {
                options: {
                    output: {
                        comments: false
                    }
                },
                app: {
                    files: [
                        {
                            dest: '../web/asset/grunt/' + dotEnvConfig.VERSION + '/js/es6.min.js',
                            src: [
                                'node_modules/vanilla-picker/dist/vanilla-picker.js',
                                '../assets/js_es6/features/*.js',
                                '../assets/js_es6/pages/*.js',
                                '../assets/js_es6/smartBlock/*.js',
                                '../assets/js_es6/utils/*.js',
                                '../assets/js_es6/wirhub.js'
                            ]
                        },
                        {
                            dest: '../web/asset/grunt/' + dotEnvConfig.VERSION + '/js/app.min.js',
                            src: '../assets/js_es6/app.js'
                        },
                        {
                            dest: '../web/asset/grunt/js/panther.min.js',
                            src: '../assets/js_es6/panther.js'
                        }
                    ]
                },
                modules: {
                    options: {
                        module: true
                    },
                    files: [
                        {
                            expand: true,
                            cwd: '../assets/js_es6/modules/',
                            src: ['*.js', '**/*.js'],
                            dest: '../web/asset/grunt/' + dotEnvConfig.VERSION + '/js/modules',
                            ext: '.js'
                        },
                        {
                            dest: '../web/asset/grunt/' + dotEnvConfig.VERSION + '/js/modules/vendor/Sortable.js',
                            src: 'node_modules/sortablejs/modular/sortable.core.esm.js'
                        },
                        {
                            dest: '../web/asset/grunt/' + dotEnvConfig.VERSION + '/js/modules/vendor/Glide.js',
                            src: 'node_modules/@glidejs/glide/dist/glide.esm.js'
                        }
                    ]
                }
            },
            uglify: {
                options: {
                    sourceMap: false
                },
                app: {
                    files: {
                        '../web/asset/grunt/js/app.js': [
                            'node_modules/block-ui/jquery.blockUI.js',
                            'node_modules/bootbox/bootbox.js',
                            '../assets/js/features/*',
                            '../assets/js/metronic/5.5.5/metronic.js',
                            '../assets/js/metronic/5.5.5/framework/base/util.js',
                            '../assets/js/metronic/5.5.5/framework/base/app.js',
                            '../assets/js/metronic/5.5.5/framework/components/general/dropdown.js',
                            '../assets/js/metronic/5.5.5/framework/components/general/menu.js',
                            '../assets/js/metronic/5.5.5/framework/components/general/offcanvas.js',
                            '../assets/js/pages/appDownloadFileTransfer.js',
                            '../assets/js/pages/styleDefaultCategory.js',
                            '../assets/js/pages/styleToolInspirationShow.js',
                            '../assets/js/pm/pm-util/parcels/jquery.pm-bootbox.js',
                            '../assets/js/pm/pm-util/parcels/jquery.pm-bootbox-delete.js',
                            '../assets/js/pm/pm-util/parcels/jquery.pm-bootbox-switch.js',
                            '../assets/js/pm/pm-util/parcels/jquery.pm-select2.js',
                            '../assets/js/pm/pm-util/pm-util.js',
                            '../assets/js/smartBlock/wdBlockAttachment.jquery.js',
                            '../assets/js/smartBlock/wdBlockAudio.jquery.js',
                            '../assets/js/smartBlock/wdBlockDoDont.js',
                            '../assets/js/smartBlock/wdBlockVideo.jquery.js',
                            '../assets/js/vendor/bootbox/bootbox.js',
                            '../assets/js/app.js'
                        ],
                        '../web/asset/grunt/js/login.js': [
                            '../assets/js/vendor/braincrafted-bootstrap/bc-bootstrap-collection.js',
                            '../assets/js/pages/appMyHubFileTransfer__form.js',
                            '../assets/js/pages/appMyHubFileTransferIndex.js',
                            '../assets/js/pages/appMyHubFileTransferUpload.js',
                            '../assets/js/pages/appSettingsEdit.js',
                            '../assets/js/pages/appSettingsPatternIndex.js',
                            '../assets/js/pages/appSettingsPatternStyle.js',
                            '../assets/js/pages/appSettingsToolInspirationIndex.js',
                            '../assets/js/pages/styleDashboardIndex.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__attachment.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__contact-person.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__do_dont.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__html.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__image.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__pattern.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__slider.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__stage.js',
                            '../assets/js/pages/styleElementAddEditTypeFullSize__teaser.js',
                            '../assets/js/pages/styleElementColorsManage.js',
                            '../assets/js/pages/styleToolInspirationAddEdit.js',
                            '../assets/js/pm/pm-dashboard.jquery.js',
                            '../assets/js/pm/pm-load-more.jquery.js',
                            '../assets/js/pm/pm-page.jquery.js',
                            '../assets/js/pm/pm-thumbnail.js',
                            '../assets/js/smartBlock/wdSmart.jquery.js',
                            '../assets/js/smartBlock/wdSmartAdd.jquery.js',
                            '../assets/js/smartBlock/wdSmartAttach.jquery.js',
                            '../assets/js/smartBlock/wdSmartCopy.js',
                            '../assets/js/smartBlock/wdSmartCut.jquery.js',
                            '../assets/js/smartBlock/wdSmartInfo.jquery.js',
                            '../assets/js/login.js',
                            '../assets/js/login_style.js',
                            '../assets/js/login_admin.js'
                        ],
                        '../web/asset/grunt/js/remote/celum.dist.js': '../assets/js/remote/celum.js',
                    }
                }
            },
            concat: {
                app: {
                    src: [
                        'node_modules/jquery/dist/jquery.min.js',
                        'node_modules/popper.js/dist/umd/popper.min.js',
                        'node_modules/bootstrap/dist/js/bootstrap.min.js',
                        'node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js',
                        'node_modules/iframe-resizer/js/iframeResizer.min.js',
                        'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
                        'node_modules/iframe-resizer/js/iframeResizer.min.js',
                        'node_modules/node-snackbar/dist/snackbar.min.js',
                        '../web/asset/grunt/js/app.js'
                    ],
                    dest: '../web/asset/grunt/js/app.min.js'
                },
                app_login: {
                    src: [
                        'node_modules/dropzone/dist/min/dropzone.min.js',
                        'node_modules/jstree/dist/jstree.min.js',
                        'node_modules/sortablejs/Sortable.min.js',
                        'node_modules/select2/dist/js/select2.min.js',
                        '../web/asset/grunt/js/login.js'
                    ],
                    dest: '../web/asset/grunt/js/login.min.js'
                },
                app_element_pattern: {
                    src: [
                        'node_modules/iframe-resizer/js/iframeResizer.contentWindow.min.js'
                    ],
                    dest: '../web/asset/grunt/js/element/pattern.min.js'
                },
                app_style_login: {
                    src: [
                        'node_modules/simplemde/dist/simplemde.min.css',
                        'node_modules/jstree/dist/themes/default/style.min.css'
                    ],
                    dest: '../web/asset/grunt/css/login.min.css'
                }
            },
            copy: {
                app: {
                    files: [
                        {
                            expand: true,
                            cwd: '../assets/fonts',
                            src: [
                                '*'
                            ],
                            dest: '../web/asset/grunt/fonts',
                            filter: 'isFile'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/material-symbols',
                            src: ['*.woff2'],
                            dest: '../web/asset/grunt/fonts',
                        },
                        {
                            expand: true,
                            cwd: '../src/AppBundle/Resources/sources/img',
                            src: [
                                '*'
                            ],
                            dest: '../web/asset/grunt/images',
                            filter: 'isFile'
                        },
                        {
                            expand: true,
                            cwd: '../assets/images',
                            src: [
                                '*'
                            ],
                            dest: '../web/asset/grunt/images',
                            filter: 'isFile'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/@ckeditor/ckeditor5-build-inline/build',
                            src: ['ckeditor.js'],
                            dest: '../web/asset/grunt/vendors/ckeditor5/36.0.1'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/ace-builds/src-min-noconflict',
                            src: [
                                '*', '*/*'
                            ],
                            dest: '../web/asset/grunt/vendors/ace/1.16.0'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/glightbox/src/js',
                            src: ['*.js', '**/*.js'],
                            dest: '../web/asset/grunt/vendors/glightbox/3.2.0'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/jstree/dist/themes/default',
                            src: [
                                '*.png',
                                '*.gif'
                            ],
                            dest: '../web/asset/grunt/css'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/echarts/dist',
                            src: ['*', '*/*'],
                            dest: '../web/asset/grunt/vendors/echarts/5.4.1'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/lottie-web/build/player',
                            src: ['*', '*/*'],
                            dest: '../web/asset/grunt/vendors/lottie/5.10.2'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/masonry-layout/dist',
                            src: ['masonry.pkgd.min.js'],
                            dest: '../web/asset/grunt/vendors/masonry-layout/4.2.2'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/simplemde/dist',
                            src: ['simplemde.min.js'],
                            dest: '../web/asset/grunt/vendors/simplemde/1.11.2'
                        },
                        {
                            expand: true,
                            cwd: 'node_modules/tom-select/dist/js',
                            src: ['tom-select.complete.min.js'],
                            dest: '../web/asset/grunt/vendors/tom-select/2.2.2'
                        }
                    ]
                }
            },
            'string-replace': {
                app: {
                    files: {
                        '../web/asset/grunt/js/app.min.js': '../web/asset/grunt/js/app.min.js'
                    },
                    options: {
                        replacements: [
                            /* Special replacement so comments strip won't kill poppers */
                            {
                                pattern: /\*\/\(function/ig,
                                replacement: "*/\n(function"
                            }
                        ]
                    }
                }
            },
            comments: {
                app: {
                    options: {
                        singleline: true,
                        multiline: true,
                        keepSpecialComments: true
                    },
                    src: ['../web/asset/grunt/js/*.min.js']
                }
            },
            watch: {
                app_sass: {
                    files: [
                        '../assets/scss/print/elements/*.scss',
                    ],
                    tasks: [
                        'sass:print'
                    ]
                },
                app_script: {
                    files: [
                        '../assets/js/feature/*.js',
                        '../assets/js/elements/*.js',
                        '../assets/js/features/*.js',
                        '../assets/js/pages/*.js',
                        '../assets/js/pm/*.js',
                        '../assets/js/pm/pm-util/parcels/*.js',
                        '../assets/js/smartBlock/*.js',
                        '../assets/js/utils/*.js',
                        '../assets/js/*.js',
                    ],
                    tasks: [
                        'script'
                    ]
                },
                app_script_es6: {
                    files: [
                        '../assets/js_es6/features/*',
                        '../assets/js_es6/pages/*',
                        '../assets/js_es6/smartBlock/*',
                        '../assets/js_es6/utils/*',
                        '../assets/js_es6/*.js'
                    ],
                    tasks: [
                        'script_es6'
                    ]
                },
                modules: {
                    files: [
                        '../assets/js_es6/modules/components/*',
                        '../assets/js_es6/modules/features/*',
                        '../assets/js_es6/modules/form/*',
                        '../assets/js_es6/modules/page/*',
                        '../assets/js_es6/modules/smartBlock/*',
                        '../assets/js_es6/modules/smartBlock/editing/*',
                        '../assets/js_es6/modules/smartBlock/feature/*',
                        '../assets/js_es6/modules/smartBlock/frontend/*',
                        '../assets/js_es6/modules/smartBlock/sidebar/*',
                        '../assets/js_es6/modules/smartBlock/utility/*',
                        '../assets/js_es6/modules/smartTool/*',
                        '../assets/js_es6/modules/smartTool/frontend/*',
                        '../assets/js_es6/modules/utility/*',
                        '../assets/js_es6/modules/vendor/*',
                    ],
                    tasks: [
                        'terser:modules',
                    ]
                }
            }
        }
    );

    /* Load plugins */
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-google-fonts');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-string-replace');
    grunt.loadNpmTasks('grunt-stripcomments');
    grunt.loadNpmTasks('grunt-terser');

    // Default task(s).
    grunt.registerTask('style', ['sass', 'cssmin']);
    grunt.registerTask('script_es6', ['terser']);
    grunt.registerTask('script', ['uglify', 'concat', 'string-replace', 'comments']);

    grunt.registerTask('default', ['googlefonts', 'style', 'script', 'script_es6', 'copy']);

};