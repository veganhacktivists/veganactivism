﻿/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.plugins.setLang('a11yhelp', 'fr-ca', {
  title: "Instructions d'accessibilité",
  contents: "Contenu de l'aide.  Pour fermer cette fenêtre, appuyez sur ESC.",
  legend: [
    {
      name: 'Général',
      items: [
        {
          name: "Barre d'outil de l'éditeur",
          legend:
            "Appuyer sur ${toolbarFocus} pour accéder à la barre d'outils. Se déplacer vers les groupes suivant ou précédent de la barre d'outil avec les touches TAB et SHIFT+TAB. Se déplacer vers les boutons suivant ou précédent de la barre d'outils avec les touches FLECHE DROITE et FLECHE GAUCHE. Appuyer sur la barre d'espace ou la touche ENTRER pour activer le bouton de barre d'outils.",
        },
        {
          name: "Dialogue de l'éditeur",
          legend:
            'Inside a dialog, press TAB to navigate to the next dialog element, press SHIFT+TAB to move to the previous dialog element, press ENTER to submit the dialog, press ESC to cancel the dialog. When a dialog has multiple tabs, the tab list can be reached either with ALT+F10 or with TAB as part of the dialog tabbing order. With tab list focused, move to the next and previous tab with RIGHT and LEFT ARROW, respectively.',
        },
        {
          name: "Menu contextuel de l'éditeur",
          legend:
            "Appuyer sur ${contextMenu} ou entrer le RACCOURCI CLAVIER pour ouvrir le menu contextuel. Puis se déplacer vers l'option suivante du menu avec les touches TAB ou FLECHE BAS. Se déplacer vers l'option précédente avec les touches SHIFT+TAB ou FLECHE HAUT. appuyer sur la BARRE D'ESPACE ou la touche ENTREE pour sélectionner l'option du menu. Oovrir le sous-menu de l'option courante avec la BARRE D'ESPACE ou les touches ENTREE ou FLECHE DROITE. Revenir à l'élément de menu parent avec les touches ESC ou FLECHE GAUCHE. Fermer le menu contextuel avec ESC.",
        },
        {
          name: "Menu déroulant de l'éditeur",
          legend:
            "A l'intérieur d'une liste en menu déroulant, se déplacer vers l'élément suivant de la liste avec les touches TAB ou FLECHE BAS. Se déplacer vers l'élément précédent de la liste avec les touches SHIFT+TAB ou FLECHE HAUT. Appuyer sur la BARRE D'ESPACE ou sur ENTREE pour sélectionner l'option dans la liste. Appuyer sur ESC pour fermer le menu déroulant.",
        },
        {
          name: "Barre d'emplacement des éléments de l'éditeur",
          legend:
            "Appuyer sur ${elementsPathFocus} pour naviguer vers la barre d'emplacement des éléments de léditeur. Se déplacer vers le bouton d'élément suivant avec les touches TAB ou FLECHE DROITE. Se déplacer vers le bouton d'élément précédent avec les touches SHIFT+TAB ou FLECHE GAUCHE. Appuyer sur la BARRE D'ESPACE ou sur ENTREE pour sélectionner l'élément dans l'éditeur.",
        },
      ],
    },
    {
      name: 'Commandes',
      items: [
        { name: 'Annuler', legend: 'Appuyer sur ${undo}' },
        { name: 'Refaire', legend: 'Appuyer sur ${redo}' },
        { name: 'Gras', legend: 'Appuyer sur ${bold}' },
        { name: 'Italique', legend: 'Appuyer sur ${italic}' },
        { name: 'Souligné', legend: 'Appuyer sur ${underline}' },
        { name: 'Lien', legend: 'Appuyer sur ${link}' },
        {
          name: "Enrouler la barre d'outils",
          legend: 'Appuyer sur ${toolbarCollapse}',
        },
        {
          name: "Accéder à l'objet de focus précédent",
          legend:
            "Appuyer ${accessPreviousSpace} pour accéder au prochain espace disponible avant le curseur, par exemple: deux éléments HR adjacents.  Répéter la combinaison pour joindre les éléments d'espaces distantes.",
        },
        {
          name: 'Accéder au prochain objet de focus',
          legend:
            "Appuyer ${accessNextSpace} pour accéder au prochain espace disponible après le curseur, par exemple: deux éléments HR adjacents.  Répéter la combinaison pour joindre les éléments d'espaces distantes.",
        },
        { name: "Aide d'accessibilité", legend: 'Appuyer sur ${a11yHelp}' },
        {
          name: ' Paste as plain text',
          legend: 'Press ${pastetext}',
          legendEdge: 'Press ${pastetext}, followed by ${paste}',
        },
      ],
    },
  ],
  tab: 'Tab',
  pause: 'Pause',
  capslock: 'Caps Lock',
  escape: 'Escape',
  pageUp: 'Page Up',
  pageDown: 'Page Down',
  leftArrow: 'Left Arrow',
  upArrow: 'Up Arrow',
  rightArrow: 'Right Arrow',
  downArrow: 'Down Arrow',
  insert: 'Insert',
  leftWindowKey: 'Left Windows key',
  rightWindowKey: 'Right Windows key',
  selectKey: 'Select key',
  numpad0: 'Numpad 0',
  numpad1: 'Numpad 1',
  numpad2: 'Numpad 2',
  numpad3: 'Numpad 3',
  numpad4: 'Numpad 4',
  numpad5: 'Numpad 5',
  numpad6: 'Numpad 6',
  numpad7: 'Numpad 7',
  numpad8: 'Numpad 8',
  numpad9: 'Numpad 9',
  multiply: 'Multiply',
  add: 'Add',
  subtract: 'Subtract',
  decimalPoint: 'Decimal Point',
  divide: 'Divide',
  f1: 'F1',
  f2: 'F2',
  f3: 'F3',
  f4: 'F4',
  f5: 'F5',
  f6: 'F6',
  f7: 'F7',
  f8: 'F8',
  f9: 'F9',
  f10: 'F10',
  f11: 'F11',
  f12: 'F12',
  numLock: 'Num Lock',
  scrollLock: 'Scroll Lock',
  semiColon: 'Semicolon',
  equalSign: 'Equal Sign',
  comma: 'Comma',
  dash: 'Dash',
  period: 'Period',
  forwardSlash: 'Forward Slash',
  graveAccent: 'Grave Accent',
  openBracket: 'Open Bracket',
  backSlash: 'Backslash',
  closeBracket: 'Close Bracket',
  singleQuote: 'Single Quote',
})
