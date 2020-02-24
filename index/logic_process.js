$(document).ready(function() {
    console.log(id);

    // Ajax Getting data from database
    $.ajax({
        url: "getLogic.php?id=" + id,
        async: false,
        success: function(result) {
            let data = result;
            console.log(result);
            let res = data.split("|");
            // console.log(res);

            let display = res[0].split("~");
            // console.log(display);
            let order = res[1].split("-");
            let displayLength = display.length;
            let parent = document.getElementById("surat");
            let child;

            let i = 0;
            $.ajax({
                url: "getText.php?id_logic=" + id,
                async: false,
                success: function(result) {
                    
                    result = result.split("-");
                    console.log(result);
                    while (i < displayLength) {
                        if (display[i] == "header") {
                            $('#surat').append(' <div class="container">\n' +
                                '        <div class="row">\n' +
                                '            <div class="col-sm-2">\n' +
                                '            </div>\n' +
                                '            <div class="col-sm-2">\n' +
                                '                <img style=\'height:100px;\' class="img-responsive" src="agam.png" alt="" srcset="">\n' +
                                '            </div>\n' +
                                '            <div class="col-sm-4" style="text-align:center;">\n' +
                                '                <h4><b>' + result[i] + '</b></h4>\n' +
                                '            </div>\n' +
                                '            <div class="col-sm-2"></div>\n' +
                                '            <div class="col-sm-2"></div>\n' +
                                '        </div>\n' +
                                '\n' +
                                '    </div>\n' +
                                '\n' +
                                '    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-8">\n' +
                                '            <div style=\'text-align:center;\'> <small>Jl. H. Agus Salim Koto Gadang Kode Pos 26161 Telp: (0752) 7444207\n' +
                                '                    e-Mail: kotogadangempatkoto@gmail.com </small></div>\n' +
                                '            <hr style="border:2px solid black;">\n' +
                                '            <hr style=\'margin-top:-14px; border:1px solid black;\'>\n' +
                                '        </div>\n' +
                                '        <div class="col-sm-2"></div>\n' +
                                '    </div>');
                            // $('#surat').append('<div id="headerSurat">'+result[i]+'</div>');
                        } else if (display[i] == "title") {
                            $('#surat').append('    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-8">\n' +
                                '            <div style=\'text-align:center;\'> <u><b>' + result[i] + '</b></u>\n' +
                                '                <br>\n' +
                                '                <b>Nomor: XX/XX/XX</b>\n' +
                                '            </div>\n' +
                                '\n' +
                                '        </div>\n' +
                                '        <div class="col-sm-2"></div>\n' +
                                '    </div>');
                            // $('#surat').append('<div id="titlwSurat">'+result[i]+'</div>');
                        } else if (display[i] == "body") {
                            $('surat').append('    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-8">\n' +
                                '            <br>\n' +
                                '        <p>\n' +
                                result[i] +
                                '        </p>\n' +
                                '        <div class="col-sm-2"></div>\n' +
                                '    </div>');
                            $('#surat').append('<div id="bodySurat">' + result[i] + '</div>');
                        } else if (display[i] == "body_option") {
                            $('#surat').append('  <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-8">\n' +
                                '         <div class=\'row\'>\n' +
                                '             <div class=\'col-sm-1\'></div>\n' +
                                '             <div class=\'col-sm-3\'>\n' +
                                result[i] +

                                '             </div>\n' +
                                '             <div class=\'col-sm-1\'>\n' +
                                '                 : <br>\n' +

                                '             </div>\n' +
                                '             <div class=\'col-sm-3\'>\n' +

                                '                 test <br>\n' +
                                '             </div>\n' +
                                '         </div>\n' +
                                '        </div>\n' +
                                '        <div class="col-sm-2"></div>\n' +
                                '    </div>');

                        } else if (display[i] == "left_sign") {
                            $('#surat').append('    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-10">\n' +
                                '\n' +
                                '        <div class="row">\n' +
                                '            <div class="col-sm-6"></div>\n' +
                                '            <div class="col-sm-3" style=\'text-align:center;\'>\n' +
                                '                \n' +
                                '            <br>\n' +
                                '            Kotogadang, 19 Februari 2019 <br>\n' +
                                result[i] +
                                '\n' +

                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            Nama Sekretaris\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '            \n' +
                                '        </div>\n' +
                                '       \n' +
                                '    </div>');

                        } else if (display[i] == "center_sign") {
                            $('#surat').append('    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-10">\n' +
                                '\n' +
                                '        <div class="row">\n' +
                                '            <div class="col-sm-6"></div>\n' +
                                '            <div class="col-sm-3" style=\'text-align:center;\'>\n' +
                                '                \n' +
                                '            <br>\n' +
                                '            Kotogadang, 19 Februari 2019 <br>\n' +
                                result[i] +
                                '\n' +

                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            Nama Sekretaris\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '            \n' +
                                '        </div>\n' +
                                '       \n' +
                                '    </div>');
                        } else if (display[i] == "right_sign") {
                            $('#surat').append('    <div class="row">\n' +
                                '        <div class=\'col-sm-2\'></div>\n' +
                                '        <div class="col-sm-10">\n' +
                                '\n' +
                                '        <div class="row">\n' +
                                '            <div class="col-sm-6"></div>\n' +
                                '            <div class="col-sm-3" style=\'text-align:center;\'>\n' +
                                '                \n' +
                                '            <br>\n' +
                                '            Kotogadang, 19 Februari 2019 <br>\n' +
                                result[i] +

                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            <br>\n' +
                                '            Nama Sekretaris\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '            \n' +
                                '        </div>\n' +
                                '       \n' +
                                '    </div>');
                        }

                        i++;
                    }
                }
            });



        }
    });
});