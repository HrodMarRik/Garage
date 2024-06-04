document.addEventListener("DOMContentLoaded", function() {
  const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
      header: {
        class: Header,
        inlineToolbar: true,
      },
      list: {
        class: List,
        inlineToolbar: true
      }
      // Other tools can be added here
    }
  });

  document.getElementById('save-button').addEventListener('click', () => {
    editor.save().then((outputData) => {
      console.log('Article data: ', outputData);
      // You can send `outputData` to your server here
    }).catch((error) => {
      console.log('Saving failed: ', error);
    });
  });
});
