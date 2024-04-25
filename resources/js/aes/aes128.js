let key = "abcdefghijklmnop";

function enCrypt(plainText, key) {
    plainText = Buffer.from(plainText);
    let cipher = Crypto.createCipheriv("AES-128-ECB", key, "");
    let encrypted = cipher.update(plainText, "", "");
    return Buffer.concat([encrypted, cipher.final()]).toString("base64");
}

function deCrypt(encryptText, key) {
    encryptText = Buffer.from(encryptText, "base64");
    let cipher = Crypto.createDecipheriv("AES-128-ECB", key, "");
    let decrypted = cipher.update(encryptText);
    return Buffer.concat([decrypted, cipher.final()]).toString("utf-8");
}

//let encryptText = enCrypt(plainText, key);
//console.log(encryptText);
//
//let plainText = deCrypt(encryptText, key);
//console.log(plainText);