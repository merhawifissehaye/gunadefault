<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <form id="news-comment" ng-submit="">
            <h1 class="text-upper">What do you think?</h1>
            <div class="form-group">
                <label for="comment-name" class="text-muted">Your Name</label>
                <input class="form-control" id="comment-name" type="text" placeholder="Leave blank to comment anonymously" />
            </div>
            <div class="form-group">
                <label for="comment-email" class="text-muted">Your Email</label>
                <input class="form-control" id="comment-email" type="text" placeholder="Leave blank to comment anonymously" />
            </div>
            <div class="form-group">
                <label for="comment-message" class="text-muted">Your Comment</label>
                <textarea class="form-control" id="comment-message" rows="6" placeholder="What did you feel about the news?"></textarea>
            </div>
            <input class="btn btn-lg btn-success" type="submit" value="SUBMIT COMMENT" />
        </form>
    </div>
</div>