// the duh function!
var words = /\b(you|the|to|than|then|at|a|with|of|it)([\s|\b])/ig,
    swapWord = {
      your: 'you',
      "you're": 'yours',
      used: 'did',
      did: 'used',
      but: 'it',
      is: 'am',
      am: 'is',
      'in': 'on',
      looking: 'seeing',
      coffee: 'COOKING',
      facebook: 'my face',
      connect: 'sucks',
      code: 'one'
    },
    swapWords = [],
    swap,
    puncuation = /([.,(:\))]+)([^a-z0-9]|$)/g,
    puncuationWords = {
      // '.': ' yeah!', 
      ',': ' urm,',
      ':)': 'BEER!'
    }, 
    dumb = "Durr Urm Um Huh? Errr AHA! Emm! Ureeka".split(' ');

for (var key in swapWord) {
  swap += '|' + key;
}

swap = new RegExp('\b(' + swap.substr(1) + ')\b', 'ig');

function duh(text) {
  text = text.replace(words, '').replace(swap, function (m) {
    return swapWord[m.toLowerCase()];
  }).replace(puncuation, function (a, m) {
    return puncuationWords[m] ? puncuationWords[m] + ' ' : a;
  });
  
  return dumb[~~(Math.random() * dumb.length)] + ' ' + text + ' YEAH!';
}

module.exports = {
  say: function (s) {
    console.log(duh(s));
  }
};

console.log('required from package.json');