// See https://aka.ms/new-console-template for more information

using var db = new BloggingContext();

// Note: This sample requires the database to be created before running.
Console.WriteLine($"Database path: {db.DbPath}.");

//Delete
Console.WriteLine("Delete the blog");
var blog = db.Blogs
.OrderBy(b => b.BlogId)
.First();
db.Remove(blog);
db.SaveChanges();

//Create
Console.WriteLine("Inserting a new blog");
db.Add(new Blog { Url = "http://blogs.msdn.com/adonet" });
db.SaveChanges();

//Read
Console.WriteLine("Querying for a blog");
blog = db.Blogs
.OrderBy(b => b.BlogId)
.First();

Console.WriteLine(blog.BlogId);
Console.WriteLine(blog.Url);