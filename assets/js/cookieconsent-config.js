// '/Users/fahimfoysal/Projects/ticketsgo/cookie-consent/cookieconsent/dist/cookieconsent.umd.js';
// import '/assets/js/cookieconsent.umd.js';
import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.0.1/dist/cookieconsent.umd.js';

// Enable dark mode
document.documentElement.classList.add('cc--darkmode');

CookieConsent.run({
    guiOptions: {
        consentModal: {
            layout: "bar inline",
            position: "bottom",
            equalWeightButtons: true,
            flipButtons: true
        },
        preferencesModal: {
            layout: "box",
            position: "right",
            equalWeightButtons: true,
            flipButtons: true
        }
    },
    categories: {
        necessary: {
            enabled: true,
            readOnly: true
        },
        analytics: {
            enabled: true,
            // title: "Analytics Cookies",
            // description: "These cookies help us to improve our website by collecting and reporting information on its usage.",
            cookies: ['_ga', '_gid', '_gcl_au', 'tidio_estado_#', 'tidio_state_#', '_Georgia']
            // onAccept: function () {
            //     // Enable Google Analytics
            //     window['ga-disable-UA-XXXXX-Y'] = false;
            // },
            // onRevoke: function () {
            //     // Disable Google Analytics
            //     window['ga-disable-UA-XXXXX-Y'] = true;
            // }
        }
    },
    language: {
        default: "en",
        autoDetect: "document",
        translations: {
            de: {
                consentModal: {
                    title: "",
                    description: "Wir nutzen Cookies und ähnliche Technologien für viele Zwecke, u. a. zur Verbesserung der Website und für Werbung.",
                    acceptAllBtn: "Ok",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Einstellungen",
                    footer: ""
                },
                preferencesModal: {
                    title: "Präferenzen für die Zustimmung",
                    acceptAllBtn: "Alle akzeptieren",
                    acceptNecessaryBtn: "Notwendige akzeptieren",
                    savePreferencesBtn: "",
                    closeIconLabel: "Modal schließen",
                    serviceCounterLabel: "Dienstleistungen",
                    sections: [
                        {
                            title: "Streng Notwendige Cookies <span class=\"pm__badge\">Immer Aktiviert</span>",
                            description: "Notwendige Cookies sind für die ordnungsgemäße Funktion der Website unerlässlich und können in unseren Systemen nicht ausgeschaltet werden.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Optional Cookies",
                            description: "Optionale Cookies helfen uns, Ihr Erlebnis zu verbessern und personalisierte Inhalte bereitzustellen, sie sind jedoch für die Kernfunktionalität der Website nicht unbedingt erforderlich.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Weitere Informationen",
                            description: "Die Cookie-Richtlinie finden Sie <a class=\"cc__link\" href=\"/cookies.php\"> hier </a>. Oder für Fragen zu unserer Cookie-Richtlinie und Ihren Auswahlmöglichkeiten, zögern Sie nicht, uns zu <a class=\"cc__link\" href=\"/contact.php\"> kontaktieren </a>."
                        }
                    ]
                }
            },
            en: {
                consentModal: {
                    title: "",
                    description: "We use cookies and similar technologies for many purposes, including improving your website experience and advertising.",
                    acceptAllBtn: "Okay",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Manage",
                    footer: ""
                },
                preferencesModal: {
                    title: "Consent Preferences Center",
                    acceptAllBtn: "Accept all",
                    acceptNecessaryBtn: "Accept Necessary",
                    savePreferencesBtn: "",
                    closeIconLabel: "Close modal",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "Strictly Necessary Cookies <span class=\"pm__badge\">Always Enabled</span>",
                            description: "Necessary cookies are essential for the proper functioning of the website and cannot be switched off in our systems.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Optional Cookies",
                            description: "Optional cookies help us to improve your experience and provide personalized content, but they are not essential for the core functionality of the website.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "More information",
                            description: "You can see the cookie policy <a class=\"cc__link\" href=\"/cookies.php\"> here </a>. Or, for any query regarding our policy on cookies and your choices, feel free to <a class=\"cc__link\" href=\"/contact.php\">contact us</a>."
                        }
                    ]
                }
            },
            es: {
                consentModal: {
                    title: "",
                    description: "Utilizamos cookies y tecnologías similares para muchos propósitos, incluida la mejora de su experiencia en el sitio web y la publicidad.",
                    acceptAllBtn: "Aceptar",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Ajustes",
                    footer: ""
                },
                preferencesModal: {
                    title: "Preferencias de Consentimiento",
                    acceptAllBtn: "Aceptar todo",
                    acceptNecessaryBtn: "Aceptar necesarias",
                    savePreferencesBtn: "",
                    closeIconLabel: "Cerrar modal",
                    serviceCounterLabel: "Servicios",
                    sections: [
                        {
                            title: "Cookies Estrictamente Necesarias <span class=\"pm__badge\">Siempre Habilitado</span>",
                            description: "Las cookies necesarias son esenciales para el funcionamiento adecuado del sitio web y no se pueden desactivar en nuestros sistemas.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Cookies Opcionales",
                            description: "Las cookies opcionales nos ayudan a mejorar su experiencia y a proporcionar contenido personalizado, pero no son esenciales para la funcionalidad básica del sitio web.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Más información",
                            description: "Puede ver la política de cookies <a class=\"cc__link\" href=\"/cookies.php\"> aquí </a>. O, para cualquier consulta relacionada con nuestra política de cookies y sus opciones, no dude en <a class=\"cc__link\" href=\"/contact.php\"> contactarnos </a>."
                        }
                    ]
                }
            },
            fr: {
                consentModal: {
                    title: "",
                    description: "Nous utilisons des cookies et des technologies similaires à des fins diverses, notamment pour améliorer votre expérience sur le site et pour la publicité.",
                    acceptAllBtn: "Ok",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Configuration",
                    footer: ""
                },
                preferencesModal: {
                    title: "Préférences de cookies",
                    acceptAllBtn: "Tout accepter",
                    acceptNecessaryBtn: "Accepter les nécessaires",
                    savePreferencesBtn: "",
                    closeIconLabel: "Fermer la modale",
                    serviceCounterLabel: "Services",
                    sections: [
                        {
                            title: "Cookies Strictement Nécessaires <span class=\"pm__badge\">Toujours Activé</span>",
                            description: "Les cookies nécessaires sont essentiels au bon fonctionnement du site et ne peuvent pas être désactivés dans nos systèmes.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Table des cookies',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domaine',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Cookies Optionnels",
                            description: "Les cookies optionnels nous aident à améliorer votre expérience et à fournir un contenu personnalisé, mais ils ne sont pas essentiels au fonctionnement de base du site.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Table des cookies',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domaine',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Plus d'informations",
                            description: "Vous pouvez consulter la politique de cookies <a class=\"cc__link\" href=\"/cookies.php\"> ici </a>. Ou, pour toute question concernant notre politique en matière de cookies et vos choix, n'hésitez pas à <a class=\"cc__link\" href=\"/contact.php\"> nous contacter </a>.",
                        }
                    ]
                }
            },
            it: {
                consentModal: {
                    title: "",
                    description: "Utilizziamo cookie e tecnologie simili per vari scopi, tra cui per migliorare la tua esperienza sul sito e per la pubblicità.",
                    acceptAllBtn: "Accetta",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Gestisci",
                    footer: ""
                },
                preferencesModal: {
                    title: "Centro preferenze per il consenso",
                    acceptAllBtn: "Accetta tutto",
                    acceptNecessaryBtn: "Accetta i necessari",
                    savePreferencesBtn: "",
                    closeIconLabel: "Chiudi la finestra",
                    serviceCounterLabel: "Servizi",
                    sections: [
                        {
                            title: "Cookie Strettamente Necessari <span class=\"pm__badge\">Sempre Attivati</span>",
                            description: "I cookie necessari sono essenziali per il corretto funzionamento del sito web e non possono essere disattivati nei nostri sistemi.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Tabella dei cookie',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Dominio',
                                    desc: 'Descrizione'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Cookie Opzionali",
                            description: "I cookie opzionali ci aiutano a migliorare la tua esperienza e a fornire contenuti personalizzati, ma non sono essenziali per la funzionalità di base del sito web.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Ulteriori informazioni",
                            description: "Puoi consultare la cookie policy <a class=\"cc__link\" href=\"/cookies.php\"> qui </a>. Oppure, per qualsiasi domanda relativa alla nostra politica sui cookie e alle tue scelte, non esitare a <a class=\"cc__link\" href=\"/contact.php\"> contattarci </a>."
                        }
                    ]
                }
            },
            el: {
                consentModal: {
                    title: "",
                    description: "Χρησιμοποιούμε cookies και παρόμοιες τεχνολογίες για πολλούς σκοπούς, συμπεριλαμβανομένου του να βελτιώσουμε την εμπειρία σας στον ιστότοπο και για διαφήμιση.",
                    acceptAllBtn: "Αποδοχή",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Διαχείριση",
                    footer: ""
                },
                preferencesModal: {
                    title: "Κέντρο Προτιμήσεων Συγκατάθεσης",
                    acceptAllBtn: "Αποδοχή όλων",
                    acceptNecessaryBtn: "Αποδοχή των απαραίτητων",
                    savePreferencesBtn: "",
                    closeIconLabel: "Κλείσιμο παραθύρου",
                    serviceCounterLabel: "Υπηρεσία|Υπηρεσίες",
                    sections: [
                        {
                            title: "Cookies Απόλυτα Απαραίτητα <span class=\"pm__badge\">Πά ντα Ενεργοποιημένα</span>",
                            description: "Τα απαραίτητα cookies είναι απαραίτητα για την σωστή λειτουργία της ιστοσελίδας και δεν μπορούν να απενεργοποιηθούν στα συστήματά μας.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Πίνακας cookies',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Περιγραφή'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Cookies Αναλυτικά",
                            description: "Τα αναλυτικά cookies μας βοηθούν να βελτιώσουμε την ιστοσελίδα μας με τη συλλογή και αναφορά πληροφοριών σχετικά με τη χρήση της.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Περισσότερες πληροφορίες",
                            description: "Μπορείτε να δείτε την πολιτική cookie <a class=\"cc__link\" href=\"/cookies.php\"> εδώ </a>. Ή, για οποιαδήποτε ερώτηση σχετικά με την πολιτική μας για τα cookies και τις επιλογές σας, μη διστάσετε να <a class=\"cc__link\" href=\"/contact.php\"> επικοινωνήσετε μαζί μας </a>.",
                            cookieTable: {
                                caption: 'Cookie table',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        }
                    ]
                }
            },
            nl: {
                consentModal: {
                    title: "",
                    description: "We gebruiken cookies en soortgelijke technologieen voor een aantal doeleinden, waaronder het verbeteren van je ervaring op onze site en voor advertenties,.",
                    acceptAllBtn: "Oké",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Instellingen",
                    footer: ""
                },
                preferencesModal: {
                    title: "Centrum voor toestemmingsvoorkeuren",
                    acceptAllBtn: "Accepteer alles",
                    acceptNecessaryBtn: "Accepteer noodzakelijk",
                    savePreferencesBtn: "",
                    closeIconLabel: "Sluit modal",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "Strikt noodzakelijke cookies <span class=\"pm__badge\">Altijd ingeschakeld</span>",
                            description: "Noodzakelijke cookies zijn essentieel voor het goed functioneren van de website en kunnen niet worden uitgeschakeld in onze systemen.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Cookie tafel',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Beschrijving'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Optionele Cookies",
                            description: "Optionele cookies helpen ons om uw ervaring te verbeteren en gepersonaliseerde inhoud te bieden, maar ze zijn niet essentieel voor de kernfunctionaliteit van de website.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Cookie tafel',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Beschrijving',
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Meer informatie",
                            description: "U kunt het cookiebeleid <a class=\"cc__link\" href=\"/cookies.php\"> hier </a> bekijken. Of voor vragen over ons cookiebeleid en uw keuzes, aarzel niet om <a class=\"cc__link\" href=\"/contact.php\"> contact met ons op te nemen </a>."
                        }
                    ]
                }
            },
            jp: {
                consentModal: {
                    title: "",
                    description: "当社は、ウェブサイトのエクスペリエンスや広告の向上など、さまざまな目的で Cookie や類似のテクノロジーを使用します。",
                    acceptAllBtn: "わかった",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "管理",
                    footer: ""
                },
                preferencesModal: {
                    title: "同意設定センター",
                    acceptAllBtn: "すべて受け入れる",
                    acceptNecessaryBtn: "受け入れる必要あり",
                    savePreferencesBtn: "",
                    closeIconLabel: "モーダルを閉じる",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "厳密に必要なクッキー <span class=\"pm__badge\">常に有効</span>",
                            description: "必要な Cookie は、Web サイトが適切に機能するために不可欠であり、当社のシステムでは無効にすることはできません。",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'クッキーテーブル',
                                headers: {
                                    name: 'クッキー',
                                    domain: 'ドメイン',
                                    desc: '説明'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "オプションのクッキー",
                            description: "オプションの Cookie は、お客様の体験を向上させ、パーソナライズされたコンテンツを提供するのに役立ちますが、Web サイトのコア機能には必須ではありません。",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'クッキーテーブル',
                                headers: {
                                    name: 'クッキー',
                                    domain: 'ドメイン',
                                    desc: '説明'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "詳細情報",
                            description: "クッキーポリシーは<a class=\"cc__link\" href=\"/cookies.php\"> こちら </a>でご覧いただけます。また、クッキーポリシーやお客様の選択肢に関するお問い合わせがある場合は、お気軽に<a class=\"cc__link\" href=\"/contact.php\">お問い合わせ</a>ください。"
                        }
                    ]
                }
            },
            pt: {
                consentModal: {
                    title: "",
                    description: "Utilizamos cookies e tecnologias semelhantes para muitas finalidades, inclusive para melhorar sua experiência em nosso site e para anúncios.",
                    acceptAllBtn: "Ok",
                    acceptNecessaryBtn: "",
                    showPreferencesBtn: "Configurações",
                    footer: ""
                },
                preferencesModal: {
                    title: "Preferências de consentimento",
                    acceptAllBtn: "Aceitar tudo",
                    acceptNecessaryBtn: "Aceitar o necessário",
                    savePreferencesBtn: "",
                    closeIconLabel: "Fechar modal",
                    serviceCounterLabel: "Serviço|Serviços",
                    sections: [
                        {
                            title: "Cookies Estritamente Necessários <span class=\"pm__badge\">Sempre Ativado</span>",
                            description: "Os cookies necessários são essenciais para o funcionamento adequado do site e não podem ser desativados em nossos sistemas.",
                            linkedCategory: "necessary",
                            cookieTable: {
                                caption: 'Tabela de cookies',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Descrição'
                                },
                                body: [
                                    {
                                        name: '_ga',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',

                                    },
                                    {
                                        name: '__stripe_sid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: '__stripe_mid',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Stripe cookie',
                                    },
                                    {
                                        name: 'PHPSESSID',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'PHP session cookie',
                                    },
                                    {
                                        name: 'cc_cookie',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Cookie consent cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Cookies Opcionais",
                            description: "Os cookies opcionais ajudam-nos a melhorar a sua experiência e a fornecer conteúdo personalizado, mas não são essenciais para a funcionalidade básica do site.",
                            linkedCategory: "analytics",
                            cookieTable: {
                                caption: 'Tabela de cookies',
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Descrição'
                                },
                                body: [
                                    {
                                        name: '_gcl_au',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Google Analytics cookie',
                                    },
                                    {
                                        name: 'tidio_estado_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: 'tidio_state_#',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Tidio chat cookie',
                                    },
                                    {
                                        name: '_Georgia',
                                        domain: 'ticket-sagradafamilia.com',
                                        desc: 'Statistical cookie',
                                    }
                                ]
                            }
                        },
                        {
                            title: "Mais informações",
                            description: "Você pode ver a política de cookies <a class=\"cc__link\" href=\"/cookies.php\"> aqui </a>. Ou, para qualquer dúvida sobre nossa política de cookies e suas escolhas, sinta-se à vontade para <a class=\"cc__link\" href=\"/contact.php\"> entrar em contato conosco </a>."
                        }
                    ]
                }
            },
        }
    }
});