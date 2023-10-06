<?php

function fetchall($table, $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->getall($table, $order, $limit);

    return $response;
}

function customfetch($table, $target, $conjunction = '', $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->select($table, $target, $conjunction, $order, $limit);

    return $response;
}

function randomfetch($table, $target, $conjunction = '', $limit = '')
{
    $init = new Sel();
    $response = $init->randomfetch($table, $target, $conjunction, $limit);

    return $response;
}

function allrandom($table, $limit = '')
{
    $init = new Sel();
    $response = $init->allrandom($table, $limit);

    return $response;
}

function sms($senderid, $recipient, $message)
{
    $send = new Yolksms();
    $response = $send->sms($senderid, $recipient, $message);

    return $response;
}

function search($table, $searchword, $record, $order = [], $limit = '')
{
    $init = new search();
    $response = $init->basic($table, $searchword, $record, $order, $limit);

    return $response;
}

function sumall($table, $rowsum, $order = [], $limit = '')
{
    $init = new sums();
    $response = $init->sumall($table, $rowsum, $order, $limit);

    return $response;
}

function sum($table, $rowsum, $target, $conjunction = '', $order = [], $limit = '')
{
    $init = new sums();
    $response = $init->sum($table, $rowsum, $target, $conjunction, $order, $limit);

    return $response;
}
function sumbetween($table, $rowsum, $target, $dates, $conjunction = '', $order = [], $limit = '')
{
    $init = new sums();
    $response = $init->sumbetween($table, $rowsum, $target, $dates, $conjunction, $order, $limit);

    return $response;
}
function sendmail($domain, $subject, $message, $from_name = 'Yolk Mailer', $to, $reply_to = 'info@phpyork.com', $reply_to_name = 'Yolk Mailer')
{
    $n = new Mail();
    $response = $n->sendmail($domain, $subject, $message, $from_name, $to, $reply_to, $reply_to_name);

    return $response;
}

function update($table, $records, $target = [], $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Upd();
    $response = $init->update($table, $records, $target, $files, $uploadto);

    return $response;
}
function insert($table, $records, $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Add();
    $response = $init->insert($table, $records, $files, $uploadto);

    return $response;
}

function delete($table, $target, $conjunction = '')
{
    $init = new Del();
    $response = $init->delete($table, $target, $conjunction);

    return $response;
}

function countall($table)
{
    $init = new Counter();
    $response = $init->countall($table);

    return $response;
}

function customcount($table, $target, $conjunction = '')
{
    $init = new Counter();
    $response = $init->customcount($table, $target, $conjunction);

    return $response;
}

function convertmoney($amount, $from_currency, $to_currency)
{
    $init = new Converter();
    $response = $init->currency($amount, $from_currency, $to_currency);

    return $response;
}

function paginate($table, $order = [], $numperpage, $ct)
{
    $init = new Pagination();
    $response = $init->paginate($table, $order, $numperpage, $ct);

    return $response;
}

function customepaginate($table, $target, $conjunction = '', $order = [], $limit, $ct)
{
    $init = new Pagination();
    $response = $init->customepaginate($table, $target, $conjunction, $order, $limit, $ct);
}

function pagecount($table, $perpage, $ct)
{
    $init = new Pagination();
    $response = $init->pagecount($table, $perpage, $ct);

    return $response;
}

function loginauth($table, $sessionvariable, $target, $conjunction = '')
{
    $init = new Auth();
    $response = $init->loginauthenticate($table, $sessionvariable, $target, $conjunction);

    return $response;
}

function authenticate($table, $target, $conjunction = '')
{
    $init = new Auth();
    $response = $init->authenticate($table, $target, $conjunction);

    return $response;
}

function loginpagechecker($sessionvariable, $isloggedinlocation = '')
{
    $init = new session();
    $response = $init->authpagechecker($sessionvariable, $isloggedinlocation);

    return $response;
}

function mainchecker($sessionvariable, $notloginlocation = '')
{
    $init = new session();
    $response = $init->mainpagechecker($sessionvariable, $notloginlocation);

    return $response;
}
 function logout($sessionvariable = '')
 {
     $init = new sessions();
     $response = $init->logout($sessionvariable);

     return $response;
 }

     function addsession($sessionvariable, $value)
     {
         $init = new sessions();
         $response = $init->addsession($sessionvariable, $value);
     }

     function updatesession($sessionvariable, $value)
     {
         $init = new sessions();
         $response = $init->updatesession($sessionvariable, $value);
     }

     function viewsession($sessionvariable)
     {
         $init = new sessions();
         $response = $init->viewsession($sessionvariable);

         return $response;
     }

     function deletesession($sessionvariable = '')
     {
         $init = new sessions();
         $response = $init->deletesession($sessionvariable);
     }

     function initsession()
     {
         $init = new sessions();
         $response = $init->initsession();
     }

    // yolk widgets made simple
    function p($attributes = [], $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }

        $tag = ' <p '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
            $value = $attributes[$key];
            $carry .= "$key=\"$value\" ";

            return $carry;
        }, '')).'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</p>
        ';

        return trim($tag);
    }

     function a($href = '', $attributes = [], $content = ['link here'])
     {
         // var_dump(strpos($href, 'http') !== false);
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             $tag = ' <a href="'.($href).'"  '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             $tag = ' <a href="'.Path::rebase($href).'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
         if (is_array($content)) {
         } else {
             $content = [$content];
         }

         // foreach ($content as $result) {
         $tag .= implode('', $content);
         // }
         $tag .= '</a>
        ';

         return trim($tag);
     }

     function nav($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <nav '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</nav>
        ';

         return trim($tag);
     }

     function html($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <html '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</html>
        ';

         return trim($tag);
     }

     function head($content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <head>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</head>
        ';

         return trim($tag);
     }

     function title($content = '')
     {
         // if (is_array($content)) {
         // } else {
         //     $content = [$content];
         // }
         $tag = ' <title>';
         $tag .= $content;

         // foreach ($content as $result) {

         // }
         $tag .= '</title>
        ';

         return trim($tag);
     }

     function body($content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <body>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</body>
        ';

         return trim($tag);
     }

     function abbr($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <abbr '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</abbr>
        ';

         return trim($tag);
     }

     function acronym($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <acronym '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</acronym>
        ';

         return trim($tag);
     }

     function address($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <address '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</address>
        ';

         return trim($tag);
     }

     function applet($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <applet '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</applet>
        ';

         return trim($tag);
     }

     function area($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <area '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</area>
        ';

         return trim($tag);
     }

     function article($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <article '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</article>
        ';

         return trim($tag);
     }

     function aside($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <aside '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</aside>
        ';

         return trim($tag);
     }

     function audio($source = '', $attributes = [], $type = '')
     {
         $tag = ' <audio '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).' controls>';

         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag .= '<source src="'.$source.'" type="'.$type.'">';
         } else {
             $tag .= '<source src="'.Path::rebase($source).'" type="'.$type.'">';
         }
         $tag .= ' </audio>
        ';

         return $tag;
     }

     function b($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <b '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</b>
        ';

         return trim($tag);
     }

     function base($href = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return ' <base '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' href="'.$href.'">';
         } else {
             return ' <base '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' href="'.Path::rebase($href).'">';
         }
     }

     function bdi($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <bdi '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</bdi>
        ';

         return trim($tag);
     }

     function bdo($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <bdo '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</bdo>
        ';

         return trim($tag);
     }

     function big($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <big '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</big>
        ';

         return trim($tag);
     }

     function blockquote($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <blockquote '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</blockquote>
        ';

         return trim($tag);
     }

     function br($times = 1)
     {
         $tag = '';
         for ($i = 1; $i <= $times; ++$i) {
             $tag .= '<br>';
         }
         $tag .= '';

         return trim($tag);
     }

     function button($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <button '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</button>
        ';

         return trim($tag);
     }

     function canvas($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <canvas '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</canvas>
        ';

         return trim($tag);
     }

     function caption($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <caption '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</caption>
        ';

         return trim($tag);
     }

     function center($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <center '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</center>
        ';

         return trim($tag);
     }

     function cite($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <cite '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</cite>
        ';

         return trim($tag);
     }

     function code($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <code '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</code>
        ';

         return trim($tag);
     }

     function col($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <col '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</col>
        ';

         return trim($tag);
     }

     function colgroup($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <colgroup '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</colgroup>
        ';

         return trim($tag);
     }

     function data($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <data '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</data>
        ';

         return trim($tag);
     }

     function datalist($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <datalist '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</datalist>
        ';

         return trim($tag);
     }

     function dd($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <dd '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</dd>
        ';

         return trim($tag);
     }

     function del($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <del '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</del>
        ';

         return trim($tag);
     }

     function details($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <details '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</details>
        ';

         return trim($tag);
     }

     function dfn($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <dfn '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</dfn>
        ';

         return trim($tag);
     }

     function dialog($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <dialog '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</dialog>
        ';

         return trim($tag);
     }

     function divi($attributes = [], $content = [''])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <div '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</div>
        ';

         return trim($tag);
     }

     function div($attributes = [], $content = [''])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <div '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</div>
        ';

         return trim($tag);
     }

     function container($attributes = [], $content = [''])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <div '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</div>
        ';

         return trim($tag);
     }

     function dt($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <dt '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</dt>
        ';

         return trim($tag);
     }

     function em($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <em '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</em>
        ';

         return trim($tag);
     }

     function embed($source, $attributes = [])
     {
         if (strpos($source, 'http') !== false || strpos($source, 'www') !== false) {
             return ' <embed src="'.$source.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             return ' <embed src="'.Path::rebase($source).'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function fieldset($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <fieldset '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</fieldset>
        ';

         return trim($tag);
     }

     function figure($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <figure '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</figure>
        ';

         return trim($tag);
     }

     function figcaption($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <figcation '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</figcaption>
        ';

         return trim($tag);
     }

     function footer($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <footer '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</footer>
        ';

         return trim($tag);
     }

     function form($action = '', $method = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <form action="'.$action.'" method="'.$method.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</form>
        ';

         return trim($tag);
     }

     function frame($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <frame '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</frame>
        ';

         return trim($tag);
     }

     function frameset($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <frameset '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</frameset>
        ';

         return trim($tag);
     }

     function h1($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h1 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h1>
        ';

         return trim($tag);
     }

     function h2($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h2 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h2>
        ';

         return trim($tag);
     }

     function h3($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h3 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h3>
        ';

         return trim($tag);
     }

     function h4($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h4 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h4>
        ';

         return trim($tag);
     }

     function h5($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h5 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h5>
        ';

         return trim($tag);
     }

     function h6($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <h6 '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</h6>
        ';

         return trim($tag);
     }

     function heada($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <header '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</header>
        ';

         return trim($tag);
     }

     function hr($times = 1)
     {
         $tag = '';
         for ($i = 1; $i <= $times; ++$i) {
             $tag .= '<hr>';
         }
         $tag .= '';

         return trim($tag);
     }

     function hruler($times = 1)
     {
         $tag = '';
         for ($i = 1; $i <= $times; ++$i) {
             $tag .= '<hr>';
         }
         $tag .= '';

         return trim($tag);
     }

     function i($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <i '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</i>
        ';

         return trim($tag);
     }

     function iframe($source = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <iframe scr='.$source.' '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</iframe>
        ';

         return trim($tag);
     }

     function img($source = '', $loadingtype = 'lazy', $attributes = [])
     {
         // $source =trim($source);
         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' />';
         } else {
             $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'/>';
         }

         return $tag;
     }

     function image($source = '', $loadingtype = 'lazy', $attributes = [])
     {
         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' />';
         } else {
             $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'/>';
         }

         return $tag;
     }

     function pic($source = '', $loadingtype = 'lazy', $attributes = [])
     {
         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' />';
         } else {
             $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'/>';
         }

         return $tag;
     }

     function photo($source = '', $loadingtype = 'lazy', $attributes = [])
     {
         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).' />';
         } else {
             $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'/>';
         }

         return $tag;
     }

     function input($type = 'text', $name = '', $class = '', $value = '', $attributes = [])
     {
         return ' <input type="'.$type.'" name="'.$name.'" class="'.$class.'"  value="'.$value.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
     }

     function ins($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <ins '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</ins>
        ';

         return trim($tag);
     }

     function kbd($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <kbd '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</kbd>
        ';

         return trim($tag);
     }

     function keyboard($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <kbd '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</kbd>
        ';

         return trim($tag);
     }

     function label($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <label '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</label>
        ';

         return trim($tag);
     }

     function legend($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <legend '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</legend>
        ';

         return trim($tag);
     }

     function li($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <li '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</li>
        ';

         return trim($tag);
     }

     function linkatom($href = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             return '<link rel="alternate" href="'.Path::rebase($href).'" type="application/atom+xml" title="Atom" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function linkcss($href = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             return '<link rel="stylesheet" href="'.Path::rebase($href).'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function linkjs($src = '', $attributes = [])
     {
         if (strpos($src, 'http') !== false || strpos($src, 'www') !== false) {
             return '<script src="'.$src.'"  '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'></script>';
         } else {
             return '<script src="'.Path::rebase($src).'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'></script>';
         }
     }

     function linkcustomcss($href = '', $rel = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="'.$rel.'" href="'.$href.'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             return '<link rel="'.$rel.'"  href="'.Path::rebase($href).'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function linkcustom($href = '', $rel = '', $type = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="'.$rel.'" href="'.$href.'" type="'.$type.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             return '<link rel="'.$rel.'"  href="'.Path::rebase($href).'" type="'.$type.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function favicon($href = '', $type = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="shortcut icon" href="'.$href.'" type="'.$type.'">';
         } else {
             return '<link rel="shortcut icon" href="'.Path::rebase($href).'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function customfavicon($href = '', $rel = '', $type = '', $attributes = [])
     {
         if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
             return '<link rel="'.$rel.'" href="'.$href.'" type="'.$type.'">';
         } else {
             return '<link rel="'.$rel.'" href="'.Path::rebase($href).'" type="text/css" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         }
     }

     function linkimport($href = '', $attributes = [])
     {
         return '<link rel="import" href="'.$href.'">';
     }

     function linkmanifest($href = '', $attributes = [])
     {
         return '<link rel="manifest" href="'.$href.'">';
     }

     function linkrss($href = '', $attributes = [])
     {
         return '<link rel="alternate" href="'.$href.'" type="application/rss+xml" title="RSS">';
     }

     function linktouchicon($href = '', $attributes = [])
     {
         return '<link rel="apple-touch-icon" href="'.$href.'">';
     }

     function main($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <main '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</main>
        ';

         return trim($tag);
     }

     function map($name = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <map name="'.$name.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</map>
        ';

         return trim($tag);
     }

     function maparea($href = '', $shape = '', $cordinate = '', $attributes = [])
     {
         return '<area shape="'.$shape.'" coords="'.$cordinate.'" '.$href.' '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
     }

     function mark($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <mark '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</mark>
        ';

         return trim($tag);
     }

     function meter($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <meter '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</meter>
        ';

         return trim($tag);
     }

     function noframes($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <noframes '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</noframes>
        ';

         return trim($tag);
     }

     function noscript($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <noscript '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</noscript>
        ';

         return trim($tag);
     }

     function object($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <object '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</object>
        ';

         return trim($tag);
     }

     function ol($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <ol '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</ol>
        ';

         return trim($tag);
     }

     function optgroup($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <optgroup '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</optgroup>
        ';

         return trim($tag);
     }

     function option($value = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <option value="'.$value.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</option>
        ';

         return trim($tag);
     }

     function output($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <output '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</output>
        ';

         return trim($tag);
     }

     function param($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <param '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</param>
        ';

         return trim($tag);
     }

     function picture($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <picture '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</picture>
        ';

         return trim($tag);
     }

     function pre($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <pre '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</pre>
        ';

         return trim($tag);
     }

     function previewer($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <pre '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</pre>
        ';

         return trim($tag);
     }

     function preview($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <pre '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</pre>
        ';

         return trim($tag);
     }

     function progress($value = '', $max = '100', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <progress value="'.$value.'" max="'.$max.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';

         // foreach ($content as $result) {
         $tag .= implode('', $content);
         // }
         $tag .= '</progress>
        ';

         return trim($tag);
     }

     function progressbar($value = '', $max = '100', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <progress value="'.$value.'" max="'.$max.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';

         // foreach ($content as $result) {
         $tag .= implode('', $content);
         // }
         $tag .= '</progress>
        ';
         $return = trim($tag);
     }

     function q($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <q '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</q>
        ';

         return trim($tag);
     }

     function rp($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <rp '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</rp>
        ';

         return trim($tag);
     }

     function rt($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <rt '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</rt>
        ';

         return trim($tag);
     }

     function ruby($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <ruby '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</ruby>
        ';

         return trim($tag);
     }

     function s($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <s '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</s>
        ';

         return trim($tag);
     }

     function samp($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <samp '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</samp>
        ';

         return trim($tag);
     }

     function script($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <script '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).' reserved>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</script>
        ';

         return trim($tag);
     }

     function section($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <section '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</section>
        ';

         return trim($tag);
     }

     function select($name = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <select name="'.$name.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</select>
        ';

         return trim($tag);
     }

     function small($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <small '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</small>
        ';

         return trim($tag);
     }

     function source($source = '', $type = '', $attributes = [])
     {
         // // return ' <source src="'.$source.'" type="'.$type.'" ' .(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
         //     $value = $attributes[$key];
         //     $carry .= "$key=\"$value\" ";
         //     return $carry;
         // }, "")).'>';
         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag = ' <source src="'.$source.'" type="'.$type.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'>';
         } else {
             $tag = ' <source  src="'.Path::rebase($source).'" type="'.$type.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
                 $value = $attributes[$key];
                 $carry .= "$key=\"$value\" ";

                 return $carry;
             }, '')).'/>';
         }

         return $tag;
     }

     function span($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <span '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</span>
        ';

         return trim($tag);
     }

     function strike($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <strike '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</strike>
        ';

         return trim($tag);
     }

     function strong($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <strong '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</strong>
        ';

         return trim($tag);
     }

     function style($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <style '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</style>
        ';

         return trim($tag);
     }

     function sub($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <sub '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</sub>
        ';

         return trim($tag);
     }

     function summary($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <summary '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</summary>
        ';

         return trim($tag);
     }

     function sup($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <sup '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</sup>
        ';

         return trim($tag);
     }

     function superscript($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <sup '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</sup>
        ';

         return trim($tag);
     }

     function svg($width = '', $height = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <svg '.$width.' '.$height.' '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';

         // foreach ($content as $result) {
         $tag .= implode('', $content);
         // }
         $tag .= '</svg>
        ';

         return trim($tag);
     }

     function table($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <table '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</table>
        ';

         return trim($tag);
     }

     function tbody($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <tbody '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</tbody>
        ';

         return trim($tag);
     }

     function td($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <td '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</td>
        ';

         return trim($tag);
     }

     function template($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <template '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</template>
        ';

         return trim($tag);
     }

     function textarea($name = '', $rows = '', $cols = '', $attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <textarea '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';

         // foreach ($content as $result) {
         $tag .= implode('', $content);
         // }
         $tag .= '</textarea>
        ';

         return trim($tag);
     }

     function tfoot($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <tfoot '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</tfoot>
        ';

         return trim($tag);
     }

     function th($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <th '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</th>
        ';

         return trim($tag);
     }

     function thead($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <th '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</th>
        ';

         return trim($tag);
     }

     function tr($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <tr '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</tr>
        ';

         return trim($tag);
     }

     function track($attributes = [])
     {
         return' <track '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
     }

     function tt($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <tt '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</tt>
        ';

         return trim($tag);
     }

     function u($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <u '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</u>
        ';

         return trim($tag);
     }

     function ul($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <ul '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</ul>
        ';

         return trim($tag);
     }

     function video($source = '', $width = '', $height = '', $type = '', $attributes = [])
     {
         $tag = ' <video width="'.$width.'" height="$'.$height.'" '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).' controls>';

         if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
             $tag .= '<source src="'.$source.'" type="'.$type.'">Your browser does not support the video tag.';
         } else {
             $tag .= '<source src="'.Path::rebase($source).'" type="'.$type.'">Your browser does not support the video tag.';
         }

         return $tag;

         $tag .= '</video>
        ';

         return trim($tag);
     }

     function wbr($attributes = [], $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = ' <wbr '.(array_reduce(array_keys($attributes), function ($carry, $key) use ($attributes) {
             $value = $attributes[$key];
             $carry .= "$key=\"$value\" ";

             return $carry;
         }, '')).'>';
         $tag .= implode('', $content);

         // foreach ($content as $result) {

         // }
         $tag .= '</wbr>
        ';

         return trim($tag);
     }

     function doctype()
     {
         return'<!DOCTYPE html>';
     }

     function linkphp($url)
     {
         return $url;
     }
