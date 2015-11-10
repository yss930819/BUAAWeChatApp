# coding=utf-8
import urllib2
import urllib
import cookielib
import re

username=['light_jiang']
password=['buaa14141086']

def login(username,password):
    cookieJarInMemory = cookielib.CookieJar()
    opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cookieJarInMemory))
    urllib2.install_opener(opener)
    url='https://sso.buaa.edu.cn/login?service=http%3A%2F%2F10.200.21.61%3A7001%2Fieas2.1%2Fwelcome'
    pd={'username':username,'password':password,'code':None,'warn':'true','lt':None,'execution':None,'_eventId':'submit','submit':'登录'}

    b=urllib2.urlopen(url).read()
    pd_form=re.findall(re.compile('<form id="fm1" ([^~]*)</form></div>'),b)[0]
    lt_value=re.findall(re.compile('name="lt" value="(.*)" />'),pd_form)
    pd['lt']=lt_value[0]
    execution_value=re.findall(re.compile(r'name="execution" value="(.*)" \/>'),pd_form)
    pd['execution']=execution_value[0]
    act_value=re.findall(re.compile('action="([^\"]*)"'),pd_form)
    act=act_value[0]
    url='https://sso.buaa.edu.cn'+act
    fm1=urllib.urlencode(pd)
    #request=urllib2.Request(url)
    #request.add_data(fm1)
    #request.add_header('User-agent','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)')
    #request.add_header('User-agent','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36 QIHU 360SE')
    a=urllib2.urlopen(url,fm1).read()
    return a

def getkebiao(username,password):
    a=login(username,password)
    s=re.findall(re.compile('a href=.*个人课表'),a)
    ks=re.findall(re.compile('"([^"]*)"'),s[0])
    url='http://10.200.21.61:7001'+ks[0]
    res=urllib2.urlopen(url).read()
    kebiao=[[],[],[],[],[],[],[]]
    kk=re.findall(r'<tr (.*?)</tr>',res,re.S)
    for i in range(0,6):
        kkk=re.findall(r'>(.*?)</td>',kk[i])
        for k in range(2,9):
            kebiao[i].append(kkk[k].decode('utf-8'))
    return kebiao                                                   #kebiao=[[第一二节周一到周日],[第三四节周一到周日],[第五六节周一到周日],[第7、8节周一到周日],[第9、10节周一到周日],[第10、11节周一到周日]]

def getgrade(username,password):
    a=login(username,password)
    grades=[]
    #[序号,学年学期,开课院系,课程代码,课程名称,课程性质,课程类别,学分,总成绩,成绩备注]
    s=re.findall(re.compile('a href=.*个人成绩'),a)
    ks=re.findall(re.compile('"[^"]*"'),s[0])
    urlt='http://10.200.21.61:7001'+ks[0][1:-1]
    res=urllib2.urlopen(urlt).read()
    s=re.findall(re.compile('a href=.*期末成绩查询'),res)
    ks=re.findall(re.compile('\'[^\']*\''),s[0])
    url='http://10.200.21.61:7001'+ks[0][1:-1]
    #queryform=urllib.urlencode({'pjsfkf':'0','pageXnxq':'','pageBkcxbj':'','pageSfjg':'','pageKcmc':''})
    gradehtml=urllib2.urlopen(url).read()
    grades_1=getgrade1(gradehtml)                #获取第一页成绩单
    grades=grades+grades_1
    page_form=re.findall(re.compile('<form name="page"([^%]*)</form>'),gradehtml)
    page_item=re.findall(re.compile('"([^\"]*)"'),page_form[0])
    page_count=int(page_item[-1])
    urlt='http://10.200.21.61:7001'+page_item[0]
    for p in range(2,page_count):
        page=urllib.urlencode({'pageNo':str(p),'pageSize':'20','pageCount':str(page_count)})
        gradehtml=urllib2.urlopen(url,page).read()
        grades_p=getgrade1(gradehtml)
        grades=grades+grades_p
        
    #cla_n=re.compile(r'</tr').split(gradehtml)
    #for ga in grades1:
        #for gr in ga:
            #print gr
    #print grades1
    return grades

def getgrade1(gh):
    courses=[]
    cla_n=re.findall(r'<tr (.*?)</tr>',gh,re.S)
    for i in cla_n:
        print i
    n=len(cla_n)
    print n
    if n<=3:return []
    else:
        for i in range(2,n-2):
            ghp=cla_n[i]
            course=[]
            coursep=re.compile(r'<td>([^<]*)</td>').findall(ghp)
            for k in [1,4,5,7,9,10,11]:        #[时间、课程名称、课程性质、学分、参与学分绩、补考重修标记、成绩]
                course.append(coursep[k])
            courses.append(course)
    return courses
