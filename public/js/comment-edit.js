function showEditForm(commentId, content) {
    document.getElementById('commentContent' + commentId).style.display = 'none';
    document.getElementById('editComment' + commentId).style.display = 'block';
    document.getElementById('commentTextArea' + commentId).value = content;
}

function updateComment(commentId, content) {
    var updatedContent = document.getElementById('commentTextArea' + commentId).value;
    // Perform an AJAX request or submit a form to update the comment with the new content
    // Here's an example of how you can use AJAX with the fetch API
    fetch('/comments/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Replace with the CSRF token used in your application
        },
        body: JSON.stringify({
            commentId: commentId,
            content: updatedContent,
        }),
    })
        .then(response => response.json())
        .then(data => {
            // Handle the response and update the UI accordingly
            if (data.success) {
                // Update the comment content
                document.getElementById('commentContent' + commentId).textContent = updatedContent;
                // Hide the edit form
                document.getElementById('commentContent' + commentId).style.display = 'block';
                document.getElementById('editComment' + commentId).style.display = 'none';
            } else {
                // Display an error message or handle the error case
            }
        })
        .catch(error => {
            // Handle the error case
        });
}

function cancelEdit(commentId, content) {
    document.getElementById('commentContent' + commentId).style.display = 'block';
    document.getElementById('editComment' + commentId).style.display = 'none';
    document.getElementById('commentTextArea' + commentId).value = content;
}
