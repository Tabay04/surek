function checkNomor() {
    let maxSKBB = 0;
    // Nyari SKBB
    $.ajax({
        url: "../controller/selectMax.php",
        async: false,
        success: function(result) {
            var resultSKBB = JSON.parse(result);
            var length = resultSKBB.features.length;
            var resultSplit;
            let dataArray = new Array();


            var i = 0;
            while (i < length) {

                resultSplit = resultSKBB.features[i].properties.no_surat.split("/");
                if (resultSplit[1] > maxSKBB) {
                    maxSKBB = resultSplit[1];
                }
                i++;
            }
        }
    });


    let maxSKTM = 0;
    // Nyari SKTM
    $.ajax({
        url: "../controller/selectMaxSKTM.php",
        async: false,
        success: function(result) {
            var resultSKTM = JSON.parse(result);
            var length = resultSKTM.features.length;
            var resultSplit;
            let dataArray = new Array();


            var i = 0;
            while (i < length) {

                resultSplit = resultSKTM.features[i].properties.no_surat.split("/");
                if (resultSplit[1] > maxSKTM) {
                    maxSKTM = resultSplit[1];
                }
                i++;
            }
        }
    });



    let maxSKU = 0;
    // Nyari SKU
    $.ajax({
        url: "../controller/selectMaxSKU.php",
        async: false,
        success: function(result) {
            var resultSKU = JSON.parse(result);
            var length = resultSKU.features.length;
            var resultSplit;
            let dataArray = new Array();


            var i = 0;
            while (i < length) {

                resultSplit = resultSKU.features[i].properties.no_surat.split("/");
                if (resultSplit[1] > maxSKU) {
                    maxSKU = resultSplit[1];
                }
                i++;
            }
        }
    });



    let maxSKMD = 0;
    // Nyari SKMD
    $.ajax({
        url: "../controller/selectMaxSKMD.php",
        async: false,
        success: function(result) {
            var resultSKMD = JSON.parse(result);
            var length = resultSKMD.features.length;
            var resultSplit;
            let dataArray = new Array();


            var i = 0;
            while (i < length) {

                resultSplit = resultSKMD.features[i].properties.no_surat.split("/");
                if (resultSplit[1] > maxSKMD) {
                    maxSKMD = resultSplit[1];
                }
                i++;
            }
        }
    });

    let maxSCUSTOM = 0;
    // Nyari SCUSTOM
    $.ajax({
        url: "../controller/selectMaxSCUSTOM.php",
        async: false,
        success: function(result) {
            var resultSCUSTOM = JSON.parse(result);
            var length = resultSCUSTOM.features.length;
            var resultSplit;
            let dataArray = new Array();


            var i = 0;
            while (i < length) {

                resultSplit = resultSCUSTOM.features[i].properties.no_surat.split("/");
                if (resultSplit[1] > maxSCUSTOM) {
                    maxSCUSTOM = resultSplit[1];
                }
                i++;
            }
        }
    });


    let data = new Array();
    data.push(maxSKBB);
    data.push(maxSKMD);
    data.push(maxSKU);
    data.push(maxSKTM);
    data.push(maxSCUSTOM);

    console.log(data);
    let finalMax = Math.max.apply(null, data);
    console.log(finalMax);
    finalMax = finalMax + 1;

    let value = document.getElementById("no_surat").value;
    valueSplit = value.split("/");
    let dataUbah = "0" + String(finalMax);
    valueSplit[1] = dataUbah;
    let target = document.getElementById("no_surat");
    // target.value=finalMax;

    console.log(valueSplit);

    let length = valueSplit.length;
    let m = 0;
    let stringBuilder = "";
    while (m < length) {
        stringBuilder = stringBuilder + valueSplit[m] + "/";
        m++;
    }

    console.log(stringBuilder);
    target.value = stringBuilder;


    // String Builder
    let nomor = document.getElementById("no_surat").value;
    document.getElementById("no_surat").value= nomor.slice(0, -1);
}