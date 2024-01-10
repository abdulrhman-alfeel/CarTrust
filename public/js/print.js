
Filevalidation = () => {
    const fi = document.getElementById('file');
    // console.log(fi.files.length);
    if (fi.files.length > 0) {
        for (const i = 0; i <= fi.files.length - 1; i++) {
            const fsize = fi.files.item(i).size;
            const file = Math.round(fsize / 1024);
            if (file >= 4096) {
                alert(
                    "حجم الملف الي ادخلته كبير جداً");
                hjt = 'حجم الملف الي ادخلته كبير جداً ملفك الذي ادخلته يبلغ حجمه "' + file +
                    '" يجب ان لايكون حجم الملف اكبر من 4ميجابايت';
                document.getElementById('size').innerHTML = hjt;
                document.getElementById('example').style.display = "none";
            } else {
                document.getElementById('example').style.display = "block";
                // document.getElementById('size').innerHTML = '<b>' +
                //     file + '</b> KB';
            }
        }
    }

}

