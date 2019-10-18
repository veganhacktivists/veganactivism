!(function(e, t) {
  'object' == typeof exports && 'object' == typeof module
    ? (module.exports = t(require('moment'), require('fullcalendar')))
    : 'function' == typeof define && define.amd
    ? define(['moment', 'fullcalendar'], t)
    : 'object' == typeof exports
    ? t(require('moment'), require('fullcalendar'))
    : t(e.moment, e.FullCalendar)
})('undefined' != typeof self ? self : this, function(e, t) {
  return (function(e) {
    function t(r) {
      if (n[r]) return n[r].exports
      var o = (n[r] = { i: r, l: !1, exports: {} })
      return e[r].call(o.exports, o, o.exports, t), (o.l = !0), o.exports
    }
    var n = {}
    return (
      (t.m = e),
      (t.c = n),
      (t.d = function(e, n, r) {
        t.o(e, n) ||
          Object.defineProperty(e, n, {
            configurable: !1,
            enumerable: !0,
            get: r,
          })
      }),
      (t.n = function(e) {
        var n =
          e && e.__esModule
            ? function() {
                return e.default
              }
            : function() {
                return e
              }
        return t.d(n, 'a', n), n
      }),
      (t.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
      }),
      (t.p = ''),
      t((t.s = 159))
    )
  })({
    0: function(t, n) {
      t.exports = e
    },
    1: function(e, n) {
      e.exports = t
    },
    159: function(e, t, n) {
      Object.defineProperty(t, '__esModule', { value: !0 }), n(160)
      var r = n(1)
      r.datepickerLocale('mk', 'mk', {
        closeText: 'Затвори',
        prevText: '&#x3C;',
        nextText: '&#x3E;',
        currentText: 'Денес',
        monthNames: [
          'Јануари',
          'Февруари',
          'Март',
          'Април',
          'Мај',
          'Јуни',
          'Јули',
          'Август',
          'Септември',
          'Октомври',
          'Ноември',
          'Декември',
        ],
        monthNamesShort: [
          'Јан',
          'Фев',
          'Мар',
          'Апр',
          'Мај',
          'Јун',
          'Јул',
          'Авг',
          'Сеп',
          'Окт',
          'Ное',
          'Дек',
        ],
        dayNames: [
          'Недела',
          'Понеделник',
          'Вторник',
          'Среда',
          'Четврток',
          'Петок',
          'Сабота',
        ],
        dayNamesShort: ['Нед', 'Пон', 'Вто', 'Сре', 'Чет', 'Пет', 'Саб'],
        dayNamesMin: ['Не', 'По', 'Вт', 'Ср', 'Че', 'Пе', 'Са'],
        weekHeader: 'Сед',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: !1,
        showMonthAfterYear: !1,
        yearSuffix: '',
      }),
        r.locale('mk', {
          buttonText: {
            month: 'Месец',
            week: 'Недела',
            day: 'Ден',
            list: 'График',
          },
          allDayText: 'Цел ден',
          eventLimitText: function(e) {
            return '+повеќе ' + e
          },
          noEventsMessage: 'Нема настани за прикажување',
        })
    },
    160: function(e, t, n) {
      !(function(e, t) {
        t(n(0))
      })(0, function(e) {
        return e.defineLocale('mk', {
          months: 'јануари_февруари_март_април_мај_јуни_јули_август_септември_октомври_ноември_декември'.split(
            '_',
          ),
          monthsShort: 'јан_фев_мар_апр_мај_јун_јул_авг_сеп_окт_ное_дек'.split(
            '_',
          ),
          weekdays: 'недела_понеделник_вторник_среда_четврток_петок_сабота'.split(
            '_',
          ),
          weekdaysShort: 'нед_пон_вто_сре_чет_пет_саб'.split('_'),
          weekdaysMin: 'нe_пo_вт_ср_че_пе_сa'.split('_'),
          longDateFormat: {
            LT: 'H:mm',
            LTS: 'H:mm:ss',
            L: 'D.MM.YYYY',
            LL: 'D MMMM YYYY',
            LLL: 'D MMMM YYYY H:mm',
            LLLL: 'dddd, D MMMM YYYY H:mm',
          },
          calendar: {
            sameDay: '[Денес во] LT',
            nextDay: '[Утре во] LT',
            nextWeek: '[Во] dddd [во] LT',
            lastDay: '[Вчера во] LT',
            lastWeek: function() {
              switch (this.day()) {
                case 0:
                case 3:
                case 6:
                  return '[Изминатата] dddd [во] LT'
                case 1:
                case 2:
                case 4:
                case 5:
                  return '[Изминатиот] dddd [во] LT'
              }
            },
            sameElse: 'L',
          },
          relativeTime: {
            future: 'после %s',
            past: 'пред %s',
            s: 'неколку секунди',
            ss: '%d секунди',
            m: 'минута',
            mm: '%d минути',
            h: 'час',
            hh: '%d часа',
            d: 'ден',
            dd: '%d дена',
            M: 'месец',
            MM: '%d месеци',
            y: 'година',
            yy: '%d години',
          },
          dayOfMonthOrdinalParse: /\d{1,2}-(ев|ен|ти|ви|ри|ми)/,
          ordinal: function(e) {
            var t = e % 10,
              n = e % 100
            return 0 === e
              ? e + '-ев'
              : 0 === n
              ? e + '-ен'
              : n > 10 && n < 20
              ? e + '-ти'
              : 1 === t
              ? e + '-ви'
              : 2 === t
              ? e + '-ри'
              : 7 === t || 8 === t
              ? e + '-ми'
              : e + '-ти'
          },
          week: { dow: 1, doy: 7 },
        })
      })
    },
  })
})
