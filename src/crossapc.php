<?php
namespace netroby\crossapc;

class crossapc
{
    public static function exists($k) {
        if (function_exists('apc_exists')) {
            return apc_exists($k);
        } elseif (function_exists('apcu_exists')) {
            return apcu_exists($k);
        }
        return false;
    }
    public static function store($k, $v, $ttl = 300) {
        if (function_exists('apc_store')) {
            return apc_store($k, $v, $ttl);
        } elseif (function_exists('apcu_store')) {
            return apcu_store($k, $v, $ttl);
        }
        return false;
    }
    public static function fetch($k) {
        if (function_exists('apc_fetch')) {
            return apc_fetch($k);
        } elseif (function_exists('apcu_fetch')) {
            return apcu_fetch($k);
        }
        return false;
    }
    public static function cas($k, $ov, $nv) {
        if (function_exists('apc_cas')) {
            return apc_cas($k, $ov, $nv);
        } elseif (function_exists('apcu_cas')) {
            return apcu_cas($k, $ov, $nv);
        }
        return false;
    }
    public static function delete($k) {
        if (function_exists('apc_delete')) {
            return apc_delete($k);
        } elseif (function_exists('apcu_delete')) {
            return apcu_delete($k);
        }
        return false;
    }
}