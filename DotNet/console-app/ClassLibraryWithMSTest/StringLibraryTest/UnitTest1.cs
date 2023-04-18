using UtilityLibraries;

namespace StringLibraryTest;

[TestClass]
public class UnitTest1
{
    [TestMethod]
    public void TestStartsWithUpper()
    {
        string[] words = {"Alphabet", "Zebra", "ABC", "A0Nva", "Mосква"};
        foreach (var word in words)
        {
            bool result = StringLibrary.StartsWithUpper(word);
            Assert.IsTrue(result);
        }
    }
}