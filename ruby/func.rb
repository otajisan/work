#!/usr/local/bin/ruby

class Func
    def initialize(name)
        @name = name
    end

    def printStr()
        msg = "Hello," + @name + "\n"
        puts(msg)
    end
end

if ARGV.size != 1
    print "ex) $ ruby func.rb hoge\n"
    exit
else
    name = ARGV[0]
end

func = Func.new(name)
func.printStr()

