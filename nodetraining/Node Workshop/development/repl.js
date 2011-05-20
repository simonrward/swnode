// Modified and simplified REPL based on Cluster's repl plugin

/*!
 * Cluster - repl
 * Copyright (c) 2011 LearnBoost <dev@learnboost.com>
 * MIT Licensed
 */

/**
 * Module dependencies.
 */

var net = require('net')
  , repl = require('repl');

/**
 * Enable REPL with all arguments passed to `net.Server#listen()`.
 *
 * Examples:
 *
 *  var repl = require('./repl')('/var/run/repl');
 *  var repl = require('./repl')(8888);
 *
 * In the terminal:
 *
 *    $ sudo telnet /var/run/repl
 *
 * or:
 *
 *    $ telnet localhost 8888
 *
 * @return {Function}
 * @api public
 */

exports = module.exports = function(){
  var args = arguments;

  if (!args.length) throw new Error('repl() plugin requires port/host or path');
  // TCP or unix-domain socket repl
  var server = net.createServer(function(sock){
    var ctx = repl.start('admin> ', sock).context;

    // merge commands into context
    // executing in context of master
    Object.keys(exports).forEach(function(cmd){
      ctx[cmd] = function(){
        var args = Array.prototype.slice.call(arguments);
        args.unshift(sock);
        return exports[cmd].apply(sock, args);
      };
    });
  });

  // Apply all arguments given
  server.listen.apply(server, args);
  return exports;
};

/**
 * Define function `name`, with the given callback
 * `fn(sock, ...)` and `description`.
 *
 * @param {String} name
 * @param {Function} fn
 * @param {String} desc
 * @return {Object} exports for chaining
 * @api public
 */

var define = exports.define = function(name, fn, desc){
  (exports[name] = fn).description = desc;
  return exports;
};

define('help', function(sock){
  sock.title('Commands');
  Object.keys(exports).forEach(function(cmd){
    if ('define' == cmd) return;

    var fn = exports[cmd]
      , params = fn.toString().match(/^function +\((.*?)\)/)[1]
      , params = params.split(/ *, */).slice(2);

    sock.row(
      cmd + '(' + params.join(', ') + ')'
      , fn.description);
  });
  sock.write('\n');
}, 'Display help information');