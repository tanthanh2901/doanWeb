const repositoryOwner = 'jackson22153fake';
const repository = 'BlogImgRepository';
const token = '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';

async function uploadImage(contentBase64, extension){
    if(extension === 'jpg') extension = 'jpeg';
    content = contentBase64.replace(`data:image/${extension};base64,`, '');
    var uuid = crypto.randomUUID();
    const fileName = `${uuid}.${extension}`;
    const url = `https://api.github.com/repos/${repositoryOwner}/${repository}/contents/${fileName}`;
    const data = {
        message: 'imageUpload',
        committer: {
            name: 'BlogImgRepository',
            email: 'jackson22153@gmail.com'
        },
        content: content
    };
    

    return await fetch(url, {
        method: 'PUT',
        headers: {
            'Authorization': `token ${token}`,
            'Content-Type': 'application/json',
            'X-GitHub-Api-Version': '2022-11-28'
        },
        body: JSON.stringify(data)
    })
}