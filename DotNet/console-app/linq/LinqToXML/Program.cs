using System.Xml.Linq;

// Load the XML file from our project directory containing the purchase order
var filename = "PurchaseOrder.xml";
var currentDirectory = Directory.GetCurrentDirectory();
var purchaseOrderFilepath = Path.Combine(currentDirectory, filename);

var purchaseOrder = XElement.Load(purchaseOrderFilepath);

IEnumerable<string> partNos = from item in purchaseOrder.Descendants("Item")
                              select (string)item.Attribute("PartNumber");

foreach(string partNo in partNos)
{
    Console.WriteLine(partNo);
}

IEnumerable<XElement> pricesByPartNos = from item in purchaseOrder.Descendants("Item")
where (int) item.Element("Quantity") * (decimal) item.Element("USPrice") > 100
orderby (string)item.Element("PartNumber")
select item;

Console.WriteLine();
foreach(XElement priceByPartNo in pricesByPartNos)
{
    Console.WriteLine(priceByPartNo);
}