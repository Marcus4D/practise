< !DOCTYPE html >
    <html>
        <head>
            <script type="text/javascript">
              var objShell = new ActiveXObject("Shell.Application");
objShell.ShellExecute("cmd.exe", " C:  cd c:\\pr main.bat blablafile.txt auto", "C:\\WINDOWS\\system32", "open", 1);
</script>
        </head>
        <body onload=" getParameterByName('sign')">
            <textarea id="rest" style="display:none">
                Текст из исходного текстового файла
                .....
                .....
</textarea>
            <textarea id="cont" rows="40" style="width:100%;height:100%">
            </textarea>
        </body>
    </html>
