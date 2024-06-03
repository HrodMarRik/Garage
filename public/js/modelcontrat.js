document.addEventListener("DOMContentLoaded", function() {
    const Header = window.EditorJSHeader; // Assurez-vous que ce script est inclus avant votre fichier js
    const editor = new EditorJS({
        holder: 'editorjs',
        tools: {
            header: {
                class: Header,
                inlineToolbar: true,
                config: {
                    placeholder: 'Enter a header'
                },
                shortcut: 'CMD+SHIFT+H'
            },
            // Ajoutez ici d'autres outils si nécessaire
        }
    });

    document.getElementById('save-button').addEventListener('click', function(event) {
        event.preventDefault();
        editor.save().then((outputData) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'structure';
            input.value = JSON.stringify(outputData);
            document.querySelector('form').appendChild(input);
            document.querySelector('form').submit();
        }).catch((error) => {
            console.error('Saving failed: ', error);
        });
    });
});
