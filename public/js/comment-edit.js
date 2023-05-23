$(document).ready(function() {
    $('#edit-button').click(function() {
      var comment = $(this).closest('.comment');
      var commentContent = comment.find('#comment-content').text().trim();

      // Hide comment content and show edit form
      comment.find('#comment-content').hide();
      comment.find('#edit-form').show();

      // Pre-populate the edit form with existing comment content
      comment.find('#edit-textarea').val(commentContent);
    });

    $('#edit-form').submit(function(e) {
      e.preventDefault();

      var comment = $(this).closest('.comment');
      var newCommentContent = comment.find('#edit-textarea').val();

      // Update the comment content with the new value
      comment.find('#comment-content').text(newCommentContent);

      // Hide the edit form and show the updated comment content
      comment.find('#edit-form').hide();
      comment.find('#comment-content').show();
    });
  });
