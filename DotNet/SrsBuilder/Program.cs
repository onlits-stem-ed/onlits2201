var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

app.MapGet("/", () => "Empty Web Project Template!");

app.MapGet("/myname", () => "My name is Mrityunjay Kumar!");

app.Run();
