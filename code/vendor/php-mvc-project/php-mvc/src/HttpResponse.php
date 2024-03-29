<?php
/*
 * This file is part of the php-mvc-project <https://github.com/php-mvc-project>
 * 
 * Copyright (c) 2018 Aleksey <https://github.com/meet-aleksey>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace PhpMvc;

/**
 * Encapsulates HTTP-response information.
 */
final class HttpResponse extends HttpResponseBase {

    /**
     * Sends all currently buffered output to the client.
     * 
     * @return void
     */
    public function flush() {
        $this->output();
        parent::flush();
    }

    /**
     * Sends all currently buffered output to the client and stops execution of the requested process.
     * 
     * @return void
     */
    public function end() {
        parent::preSend();
        $this->output();
        parent::end();
        exit();
    }

    private function output() {
        if (!$this->outputStarted()) {
            // status code and message
            if (!empty($this->statusCode) || !empty($this->statusDescription)) {
                $statusCode = $this->statusCode;



                    $statusCode = 200;
                }

                //$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
               // header($protocol . ' ' . $statusCode . ' ' . $this->statusDescription);
               // $GLOBALS['http_response_code'] = $statusCode;
            }

            // cookies
            foreach ($this->cookies as $cookie) {
                call_user_func_array('setcookie', $cookie);
            }

            // headers
           // foreach ($this->headers as $name => $value) {
          //      header($name . ': ' . $value);
          //  }
        }

        // files
       // foreach ($this->files as $file) {
         //   $fp = fopen($file, 'rb');
          //  fpassthru($fp);
           // fclose($fp);
       // }

        // text
      //  if (!empty($this->output)) {
       //     echo $this->output;
      //  }
   // }

}