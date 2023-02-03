using NoticeBuilder.Controllers;

namespace NoticeBuilderTest;

public class UnitTest1
{
    UserController usercontroller = new UserController();

    [Fact]
    public void AuthenticateTrueTest()
    {
        Assert.True(usercontroller.Authenticate("admin", "admin"));
    }

    [Fact]
    public void AuthenticateFalseTest()
    {
        Assert.False(usercontroller.Authenticate("mrityunjay", "123456"));
    }
}